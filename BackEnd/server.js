import express from 'express';
import mysql from 'mysql2/promise';
import cors from 'cors';
import dotenv from 'dotenv';
import path from 'path';
import { fileURLToPath } from 'url';

dotenv.config();

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = process.env.PORT || 3000;

// Middleware
app.use(cors());
app.use(express.json());

// Database connection
const dbConfig = {
    host: process.env.DB_HOST || 'localhost',
    user: process.env.DB_USER || 'root',
    password: process.env.DB_PASSWORD || 'Alvian29',
    database: process.env.DB_NAME || 'portfolio_db'
};

// Create connection pool
const pool = mysql.createPool(dbConfig);

// Test database connection
async function testConnection() {
    try {
        const connection = await pool.getConnection();
        console.log('✅ Database connected successfully!');
        connection.release();
    } catch (error) {
        console.error('❌ Database connection failed:', error.message);
    }
}

// Routes

// GET all projects
app.get('/api/projects', async (req, res) => {
    try {
        console.log('📦 Fetching projects from database...');
        const [rows] = await pool.execute('SELECT * FROM projects ORDER BY created_at DESC');
        console.log(`✅ Found ${rows.length} projects`);
        res.json(rows);
    } catch (error) {
        console.error('❌ Error fetching projects:', error);
        res.status(500).json({ error: 'Internal server error' });
    }
});

// POST new contact message
app.post('/api/contact', async (req, res) => {
    try {
        const { name, email, message } = req.body;
        console.log('📩 New contact message:', { name, email, message });
        
        if (!name || !email || !message) {
            return res.status(400).json({ error: 'All fields are required' });
        }

        const [result] = await pool.execute(
            'INSERT INTO messages (name, email, message) VALUES (?, ?, ?)',
            [name, email, message]
        );

        console.log('✅ Message saved to database with ID:', result.insertId);
        
        res.json({ 
            success: true, 
            message: 'Pesan berhasil dikirim!',
            id: result.insertId 
        });
    } catch (error) {
        console.error('❌ Error saving message:', error);
        res.status(500).json({ error: 'Internal server error' });
    }
});

// GET visitor count
app.get('/api/visitors', async (req, res) => {
    try {
        const [rows] = await pool.execute('SELECT count FROM visitors WHERE id = 1');
        let count = rows[0]?.count || 0;
        
        // Increment count
        count++;
        await pool.execute(
            'INSERT INTO visitors (id, count) VALUES (1, ?) ON DUPLICATE KEY UPDATE count = ?', 
            [count, count]
        );
        
        console.log(`👥 Visitor count: ${count}`);
        res.json({ count });
    } catch (error) {
        console.error('❌ Error with visitor count:', error);
        res.status(500).json({ error: 'Internal server error' });
    }
});

// Get all messages (for admin)
app.get('/api/messages', async (req, res) => {
    try {
        const [rows] = await pool.execute('SELECT * FROM messages ORDER BY created_at DESC');
        res.json(rows);
    } catch (error) {
        console.error('Error fetching messages:', error);
        res.status(500).json({ error: 'Internal server error' });
    }
});

// Start server
app.listen(PORT, () => {
    console.log(`🚀 Server running on http://localhost:${PORT}`);
    testConnection();
});
import express from "express";
import dotenv from 'dotenv'
import { db_initialize_create } from "./db.js";
dotenv.config()

const app = express()
app.use(express.json());

const port = process.env.PORT || 3000

app.get("/health", (req, res) => res.json({ status: "ok" }));

app.listen(port, () => {
  console.log(`Example app listening on port ${port}`)
})

db_initialize_create().then(() => {
  console.log("DB initialized and tables created");
});
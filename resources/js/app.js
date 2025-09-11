import React from "react";
import ReactDOM from "react-dom";
import { HashRouter as Router, Routes, Route, Link } from "react-router-dom";

// Pages
function Home() {
    return <div className="content">Home Page</div>;
}

function About() {
    return <div className="content">About Us</div>;
}

function Contact() {
    return <div className="content">Contact</div>;
}

// App
function App() {
    return (
        <Router>
            <nav className="navbar">
                <Link to="/">Home</Link>
                <Link to="/about">About</Link>
                <Link to="/contact">Contact</Link>
            </nav>

            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/contact" element={<Contact />} />
            </Routes>
        </Router>
    );
}

// Mount React
const container = document.getElementById("app");
ReactDOM.render(<App />, container);

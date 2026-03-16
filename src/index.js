import React from "react"
import ReactDOM from "react-dom/client"
import Enhancer from "./components/Enhancer.jsx"

// Hybrid mode - React enhances PHP-rendered content
if (document.querySelector("#react-enhancer")) {
  const root = ReactDOM.createRoot(document.querySelector("#react-enhancer"))
  root.render(<Enhancer />)
}

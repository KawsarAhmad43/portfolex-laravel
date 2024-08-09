package main

import (
    "fmt"
    "net/http"
    "os"
)

func main() {
    // Serve static files from the "static" directory
    fs := http.FileServer(http.Dir("./static"))
    http.Handle("/", fs)

    // API endpoint
    http.HandleFunc("/api/greet", greetHandler)

    // Start the server
    port := os.Getenv("PORT")
    if port == "" {
        port = "8080"
    }
    fmt.Printf("Server running at http://localhost:%s/\n", port)
    http.ListenAndServe(":"+port, nil)
}

func greetHandler(w http.ResponseWriter, r *http.Request) {
    w.Header().Set("Content-Type", "application/json")
    fmt.Fprint(w, `{"message": "Hello from Go!"}`)
}

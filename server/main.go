package main

import (
	"flag"
	"log"
	"net/http"
)

var (
	flagPort      = flag.String("p", "8080", "port exposing the webserver to")
	flagStaticLoc = flag.String("f", "./", "root location of static web files")
)

func main() {
	flag.Parse()

	http.Handle("/", http.FileServer(http.Dir(*flagStaticLoc)))

	log.Printf("exposing files from %s to port %s...", *flagStaticLoc, *flagPort)
	log.Fatal("Failed exposing web server: ",
		http.ListenAndServe(":"+*flagPort, nil))
}

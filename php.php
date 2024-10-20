<?php
    class TravelOffre{
        public $titre;
        public $destination;
        public $dated;
        public $dater;
        public $price;
        public $avai;
        public $cat;
        

        public function __construct($titre,$destination,$dated,$dater,$price,$avai,$cat)
        {
            $this->titre = $titre;
            $this->destination = $destination;
            $this->dated = $dated;
            $this->dater = $dater;
            $this->price = $price;
            $this->avai = $avai;
            $this->cat = $cat;

        }

        public function show()
        {
            echo "
            <!DOCTYPE html>
            <html lang='fr'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Formulaire Soumis</title>
                <style>
                    /* General body styling */
                    body {
                        font-family: Arial, sans-serif; /* Font for the entire page */
                        background-color: #f4f4f4; /* Light gray background */
                        margin: 0; /* Remove default margin */
                        padding: 20px; /* Add padding around the body */
                        display: flex; /* Use flexbox for centering */
                        justify-content: center; /* Center horizontally */
                        align-items: center; /* Center vertically */
                        height: 100vh; /* Full viewport height */
                    }
            
                    /* Table styling */
                    table {
                        width: 80%; /* Set table width */
                        border-collapse: collapse; /* Remove gaps between cells */
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
                        background-color: #fff; /* White background for the table */
                        border-radius: 8px; /* Rounded corners */
                    }
            
                    /* Table header styling */
                    th {
                        background-color: #4CAF50; /* Green background */
                        color: white; /* White text */
                        padding: 12px; /* Padding for header cells */
                        text-align: left; /* Align text to the left */
                    }
            
                    /* Table data cell styling */
                    td {
                        padding: 12px; /* Padding for data cells */
                        border-bottom: 1px solid #ddd; /* Bottom border */
                    }
            
                    /* Styling for row hover effect */
                    tr:hover {
                        background-color: #f1f1f1; /* Light gray background on hover */
                    }
            
                    /* Responsive design for smaller screens */
                    @media (max-width: 600px) {
                        table {
                            width: 100%; /* Full width on small screens */
                        }
                    }
                </style>
            </head>
            <body>
              
                <table border='1'>
                            <tr><th>Titre</th><td>{$this->titre}</td></tr>
                            <tr><th>Destination</th><td>{$this->destination}</td></tr>
                            <tr><th>Date de départ</th><td>{$this->dated}</td></tr>
                            <tr><th>Date de retour</th><td>{$this->dater}</td></tr>
                            <tr><th>Prix</th><td>{$this->price}</td></tr>
                            <tr><th>Disponibilité</th><td>" . ($this->avai ? 'Oui' : 'Non') . "</td></tr>
                            <tr><th>Catégorie</th><td>{$this->cat}</td></tr>
                          </table>
            </body>
            </html>
            "; 
        }
        
    }
    $titre = $_GET['titre'];
    $destination = $_GET['des'];
    $dated = $_GET['dated'];
    $dater = $_GET['dater'];
    $price = $_GET['price'] ;
    $avai = isset($_GET['ava']) ? true : false; 
    $cat = $_GET['category'];

    $offer=new TravelOffre($titre,$destination,$dated,$dater,$price,$avai,$cat);

    $offer->show();

?>
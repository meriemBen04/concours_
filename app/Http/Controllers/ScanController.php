<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Condidat;
use App\Models\Concours;
use App\Models\Salle;
use App\Models\Specialite;


use DOMDocument;
use DOMXPath;
use DOMElement;
class ScanController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function scan()
    {
        // Example URL (replace with dynamic input if needed)
        $lien = "https://progres.mesrs.dz/api/print/convcation?token=f9b9a514-1060-4bed-9317-a6646246ed92";
    
        // Fetch data from the given URL
        $response = Http::withOptions([
            'verify' => false // Disables SSL verification
        ])->get($lien);
    
        $html = $response->body();
        $dom = new DOMDocument();
        libxml_use_internal_errors(true); // Prevent warnings due to malformed HTML
        $dom->loadHTML($html);
        libxml_clear_errors();
        
        // Create an XPath object
        $xpath = new DOMXPath($dom);
       

        $data = [];
        $nodes = $xpath->query("//li");
        if ($nodes->length > 0) {
            
      foreach ($nodes as $node) {
            if ($node instanceof DOMElement) {
        // Get the label (Arabic text)
         $label = trim($node->childNodes->item(0)->nodeValue);
         

        // // Get the actual value from the <span> tag
         $span = $node->getElementsByTagName("span")->item(0);

         $value = $span ? trim($span->nodeValue) : "N/A";

           $data[] = $value;
                
            }
        } }
        $specialite = Specialite::all();
        $concours=Concours::all();
        $salles=Salle::all();

        $matricule=$data[0];
        $condidats = Condidat::where('matricule', $matricule)->get();
       // dd($candidate);
        return view('scan.index', compact('condidats', 'specialite', 'concours', 'salles'));       
       
}

}
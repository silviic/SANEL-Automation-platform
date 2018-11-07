@extends('layouts.app')

    @section('title')
      New Order | Specify information
    @endsection

    @section('content')
    
 <body style="background-color: #f9f9f9;">
  
   <div style="background-color: #212529;
               color: #ffffff;
               padding-top:20px;
               padding-bottom:20px;
               padding-left: 12%;
               margin-top:20px;">
               
        <img src="/storage/images/sanel_logo_white.png" style="width: 200px; height: auto; align: center;">
   </div>     

    <div class="container">       
        <div class="row">
           <div class="d-none d-lg-block col-lg-2" style="background-color: #262e34;">
            <p>&nbsp;</p>
            </div>
            
            <div class="col-md" style="">
            
            <!-- margin-left: -20px; margin-right: -20px; te ir ielikti jo divi <div> viens otram blakus atstāj šķirbu un es savādāk nemāceju
            viņu noņemt -->
            
                <div style="margin-left: -20px; 
                            margin-right: -20px;
                            background-color: #007bff;
                            padding-top: 10px;
                            padding-bottom: 5px;
                            padding-left: 10px;
                            color: #ffffff;
                            font-size: 16px;">
                                      
                        <p>Apstiprinājums par sniegto informāciju</p>
                </div>

                <div style="margin-left: -20px;
                            margin-right: -20px;
                            background-color: #ffffff;
                            padding: 10px;">
                            
                        <h2>Paldies par sniegto informāciju.</h2>
                        <p style="margin-bottom: 30%;">Tiklīdz klients veiks apmaksu- atsūtīsim Jums pasūtījuma apstiprinājumu, lai varat atlasīt preces saņēmšanai/ pasūtīt nepieciešamās preces. Ja jums ir kādi Jautājumi vai komentāri lūdzam sazināties pa e-pastu info@sanel.lv vai zvanot pa talr. 27887888</p>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: #212529;
                padding-top:40px;
                padding-bottom:30px;
                color: #ffffff;
                font-size: 12px;">
        
        <footer class="text-center">
            <p>Copyright 2018 &copy; SANEL.LV</p>
        </footer>
        
    </div>
     
 </body>	           
   
    @endsection

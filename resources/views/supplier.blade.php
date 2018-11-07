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
                                      
                        <p>Jauns pasūtījums no SANEL.LV | {{ $order->order_nr }}</p>
                </div>

                <div style="margin-left: -20px;
                            margin-right: -20px;
                            background-color: #ffffff;
                            padding: 10px;">
                            
                        <p class="font-weight-bold">Lūdzam precizēt preces/-ču pieejamību.</p>
                        
                        <ul>                        
                        <li><p class="font-weight-light">Visiem pieejamajiem produktiem lūdzam ieķeksēt pretī "Pieejams" sadaļai.</p></li>

                        <li><p class="font-weight-light">Ja prece/- es nav atlikumos vai ir pieejamas mazākos daudzumos- lūdzam norādīt pieejamo daudzumu un piegādes datumu, ja prece/-es tiek pasūtītas no ražotāja.*</p></li>

                        <li><p class="font-weight-light">Ja prece ir noņemta no ražošanas un ir pieejama tikai pēc noliktavas atlikumiem- lūdzam norādīt pieejamo daudzumu un ieķeksēt pretī "Vairs neražo" sadaļai. (Ja prece nav atlikumos, tad pie "Pieejamais daudzums" norādat 0.)</p></li>
                        </ul>
                        
                        <p class="font-weight-light font-italic font-weight-bold"
                           style="font-size: 12px;
                                  padding-top: 5px;">
                           
                           *Norādot piegādes termiņus lūdzam ņemt vērā, ka pasūtījums var tikt apstiprināts 24h laikā no Jūsu informācijas sniegšanas brīža.</p>
                        
                        <table class="table table-hover"
                               style="font-size: 14px;">
                        
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejams</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                              <th scope="col">Vairs neražo</th>
                            </tr>
                          </thead>
                          
                          
                          <tbody>
                           <!-- šeit vajag uztaisīt tā, ka:
                           1.nospiežot "pieejams"- atbilsošā rindiņa- <tr class="table-success">...</tr> un vairs neko nevar ne ierakstī ne nospiest tajā rindā.
                           2.ierakstot "pieejamais daudzums" jāprasa vēl inputs "Date_picker"- tad class="table-success"> un neko vairs nevar ne ierakstī ne nospiest tajā rindā.
                           3.nospiežot "vairs neražo"- jāprasa vēl inputs "Date_picker"- tad <tr class="table-success">...</tr> un vairs neko nevar ne ierakstī ne nospiest tajā rindā.
                            -->
                           
                            @foreach($order->products as $product)
                             <tr style="text-align: center">             
                              <td>{{ $product->product_name }}</td>
                              <td>{{ $product->product_article }}</td>
                              <td>{{ $product->product_quantity }}</td>
                              
                                 
                              <form action="{{ route('postproductquantities', [$product->id]) }}" method="POST" style="margin-top: -20px;" id="requestproduct">
                                 
                                  <td class="vcenter">
                                  <label for="instock"></label>
                                  <input type="checkbox" name="instock" value="1" id="instock">
                                  </td>
                                  
                                  <td>
                                  <label for="availablecount"></label>
                                  <input type="textarea" name="availablecount" value="{{ $product->available_count }}" class="form-control" 
                                         style="max-width: 150px; 
                                                max-height: 30px; 
                                                font-size: 12px; 
                                                text-align: center;
                                                margin-top: -25px;" 
                                         rows="1"
                                         id="availablecount">
                                  </td>
                                  
                                  <td>
                                  <label for="date"></label>
                                  <input type="text" name="date" value="{{ $product->delivery_date }}" class="form-control"  
                                         style="max-width: 200px; 
                                                max-height: 30px; 
                                                font-size: 12px; 
                                                text-align: center;
                                                margin-top: -25px;" 
                                         id="date" 
                                         placeholder="DD/MM/YYYY">
                                  </td>
                                  
                                  <td class="vcenter">
                                  <label for="discontinued"></label>
                                  <input type="checkbox" name="discontinued" value="1" id="discontinued">
                                  </td>
                                  
                                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                                  
                              </form>
                              
                              </tr>
                            @endforeach
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-8">
                          
                              <p class="font-weight-light font-italic" 
                                 style="font-size: 14px;
                                        padding-top: 40px;">
                              Tiklīdz saņemsim atbildi par preču pieejamību, sistēma automātiski virzīs šo pasūtījumu tālāk.</p>

                              <p class="font-weight-light font-italic font-weight-bold" 
                                 style="font-size: 12px;">

                              Ja 24h laikā no šīs ziņas saņemšanas nesniegsiet atbildi- sistēma uzskatīs, ka šī prece/-es nav pieejamas.</p>
                          
                          </div>
                          <div class="col-4"
                               style="font-size: 14px;
                                      padding-top: 40px;
                                      padding-bottom: 40px;">
                          
                            <button type="submit" class="btn btn-primary btn-lg btn-block" form="requestproduct">Apstiprināt</button>
                            
                          </div>
                        </div>
                        
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

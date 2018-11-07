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
            
                <div style="margin-left: -20px; 
                            margin-right: -20px;
                            background-color: #007bff;
                            padding-top: 10px;
                            padding-bottom: 5px;
                            padding-left: 10px;
                            color: #ffffff;
                            font-size: 16px;">
                                      
                        <p>Par Jūsu pasūtījumu SANEL.LV | {{ $order->order_nr }}</p>
                </div>

                <div style="margin-left: -20px;
                            margin-right: -20px;
                            background-color: #ffffff;
                            padding: 10px;">
 
                                              
<!--------------------------------------------------------- 1. Viss ir uz vietas ---------------------------------------------------------------------->        
                            
                        <p class="font-weight-bold">1. Ja viss ir uz vietas:</p>
                        
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Visi Jūsu nepieciešamie produkti ir noliktavā un tiks sagādāti uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✔</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✔</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✔</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Nospiežot pogu "Apmaksāt" Jūs tiksiet novirzīti uz maksājuma veikšanas lapu.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Gadījumā, ja pasūtījums vairs nav aktuāls- varat to atcelt nospiešot uz <a href="#">šīs saites</a>.</p>
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                                
                            <button type="button" href="#" class="btn btn-primary btn-lg btn-block">Apmaksāt</button>
                        
                          </div>
                        </div>
<!--------------------------------------------------------- ############## ---------------------------------------------------------------------->
               
 <!------------------------------------------------ 2. Daļēja preču pieejamība (jāpasūta preces)------------------------------------------------->        
                            
                        <p class="font-weight-bold">2. Daļēja preču pieejamība (jāpasūta preces):</p>
                        
                        <p style="font-size: 14px;">
                                  
                                  Diemžēl kāda no Jūsu pasūtītajām precem nav atlikumos un ir jāpasūta no ražotāja.</p>
                        
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Lūdzam apskatīt produktu pieejamības kopsavilkumu un izvēlēties sev vēlamo risinājumu.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✔</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Tiklīdz izvēlēsieties vēlamo variantu- Jums tiks attēlots pasūtījuma kopsavilkums atkarībā pēc veiktās izvēles. Pēc apstiprinājuma tiksiet novirzīti uz apmaksas lapu.</p>
                                
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Pasūtījums tiks apstrādāts uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Gaidīt pilno pasūtījumu" Jūs izvēlaties veikt apmaksu un saņemt pilno pasūtījumu pēc augstāk norādītā datuma.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Pasūtīt tikai pieejamās preces" Jūs izvēlaties veikt apmaksu un pasūtīt preces atbilstoši "Pieejamais daudzums" kolonnai.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Veikt 2 piegādes" Jūs izvēlaties veikt apmaksu un šobrīd saņemmt preces atbilstoši "Pieejamais daudzums" kollonai un pārējās preces ar 2. piegādi augstāk norādītajā datumā.</p>
                                
                                <p class="font-weight-bold" 
                                   style="font-size: 12px;
                                          text-align: center">
                                       
                                Ja pēc visas šīs informācijas pārskatīšanas vēlaties mainīt nepieciešamos produktu daudzumus vai dzēst kādu no tiem, varat to izdarīt, noklikšķinot uz "Rediģēt pasūtījumu".</p>
                                
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                            
                                
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Gaidīt pilno pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Pasūtīt tikai pieejamās preces</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block">Veikt 2 piegādes (2x piegādes izmaksas)</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editOrder">Rediģēt pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-secondary btn-sm btn-block">Atcelt pasūtījumu</button>
                        
                          </div>
                        </div>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
            
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->

<!----------------------------------- 3. Daļēja preču pieejamība (sarakstā ir preces, ko vairs neražo)------------------------------------------>        
                            
                        <p class="font-weight-bold">3. Daļēja preču pieejamība (sarakstā ir preces, ko vairs neražo):</p>
                        
                        <p style="font-size: 14px;">
                                  
                                  Diemžēl kāda no Jūsu pasūtītajām precem nav atlikumos un ir jāpasūta no ražotāja.</p>
                                  
                        <p style="font-size: 14px;">
                                  
                                  Tāpat, Jūsu pasūtījumā ir preces, kas ir noņemtas no ražošanas.</p>
                        
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Lūdzam apskatīt produktu pieejamības kopsavilkumu un izvēlēties sev vēlamo risinājumu.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✔</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Tiklīdz izvēlēsieties vēlamo variantu- Jums tiks attēlots pasūtījuma kopsavilkums atkarībā pēc veiktās izvēles. Pēc apstiprinājuma tiksiet novirzīti uz apmaksas lapu.</p>
                                
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Pasūtījums tiks apstrādāts uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Gaidīt pilno pasūtījumu" Jūs izvēlaties veikt apmaksu un saņemt pilno pasūtījumu pēc augstāk norādītā datuma. Produkts/-i, kas atzīmēti ar "Vairs neražo" statusu tiks piegādāti pēc "Pieejamais daudzums" apjomiem.*</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Pasūtīt tikai pieejamās preces" Jūs izvēlaties veikt apmaksu un pasūtīt preces atbilstoši "Pieejamais daudzums" kolonnai.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Veikt 2 piegādes" Jūs izvēlaties veikt apmaksu un šobrīd saņemmt preces atbilstoši "Pieejamais daudzums" kollonai un pārējās preces ar 2. piegādi augstāk norādītajā datumā.</p>
                                
                                <p class="font-weight-bold" 
                                   style="font-size: 12px;
                                          text-align: center">
                                       
                                Ja pēc visas šīs informācijas pārskatīšanas vēlaties mainīt nepieciešamos produktu daudzumus vai dzēst kādu no tiem, varat to izdarīt, noklikšķinot uz "Rediģēt pasūtījumu".</p>
                                
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                            
                                
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Gaidīt pilno pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Pasūtīt tikai pieejamās preces</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block">Veikt 2 piegādes (2x piegādes izmaksas)</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editOrder">Rediģēt pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-secondary btn-sm btn-block">Atcelt pasūtījumu</button>
                        
                          </div>
                        </div>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                *Produkti, kas apzīmēti kā <b>"Vairs neražo"</b>, ir pieejami daudzumos, kas palikuši mūsu/ mūsu piegādātāju noliktavās. Citādi - šos produktus vairs nevar pasūtīt.</p>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
            
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->

<!-------------------------------------------------- 4. Viss pasūtāms (jāpasūta preces)--------------------------------------------------------->        
                            
                        <p class="font-weight-bold">4. Viss pasūtāms (jāpasūta preces):</p>
                        
                        <p style="font-size: 14px;">
                                  
                                  Diemžēl visas no Jūsu pasūtītajām precem nav nepieciešamajos atlikumos un ir jāpasūta no ražotāja.</p>
                                                          
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Lūdzam apskatīt produktu pieejamības kopsavilkumu un izvēlēties sev vēlamo risinājumu.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Tiklīdz izvēlēsieties vēlamo variantu- Jums tiks attēlots pasūtījuma kopsavilkums atkarībā pēc veiktās izvēles. Pēc apstiprinājuma tiksiet novirzīti uz apmaksas lapu.</p>
                                
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Pasūtījums tiks apstrādāts uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Gaidīt pilno pasūtījumu" Jūs izvēlaties veikt apmaksu un saņemt pilno pasūtījumu pēc augstāk norādītā datuma.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Pasūtīt tikai pieejamās preces" Jūs izvēlaties veikt apmaksu un pasūtīt preces atbilstoši "Pieejamais daudzums" kolonnai.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Veikt 2 piegādes" Jūs izvēlaties veikt apmaksu un šobrīd saņemmt preces atbilstoši "Pieejamais daudzums" kollonai un pārējās preces ar 2. piegādi augstāk norādītajā datumā.</p>
                                
                                <p class="font-weight-bold" 
                                   style="font-size: 12px;
                                          text-align: center">
                                       
                                Ja pēc visas šīs informācijas pārskatīšanas vēlaties mainīt nepieciešamos produktu daudzumus vai dzēst kādu no tiem, varat to izdarīt, noklikšķinot uz "Rediģēt pasūtījumu".</p>
                                
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                            
                                
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Gaidīt pilno pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Pasūtīt tikai pieejamās preces</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block">Veikt 2 piegādes (2x piegādes izmaksas)</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editOrder">Rediģēt pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-secondary btn-sm btn-block">Atcelt pasūtījumu</button>
                        
                          </div>
                        </div>
                                            
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
            
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->

<!------------------------------------ 5. Viss pasūtāms (sarakstā ir preces, ko vairs neražo)--------------------------------------------------->        
                            
                        <p class="font-weight-bold">5. Viss pasūtāms (sarakstā ir preces, ko vairs neražo):</p>
                        
                        <p style="font-size: 14px;">
                                  
                                  Diemžēl kāda no Jūsu pasūtītajām precem nav atlikumos un ir jāpasūta no ražotāja.</p>
                                  
                        <p style="font-size: 14px;">
                                  
                                  Tāpat, Jūsu pasūtījumā ir preces, kas ir noņemtas no ražošanas.</p>
                        
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Lūdzam apskatīt produktu pieejamības kopsavilkumu un izvēlēties sev vēlamo risinājumu.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$piegades_datums</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Tiklīdz izvēlēsieties vēlamo variantu- Jums tiks attēlots pasūtījuma kopsavilkums atkarībā pēc veiktās izvēles. Pēc apstiprinājuma tiksiet novirzīti uz apmaksas lapu.</p>
                                
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Pasūtījums tiks apstrādāts uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Gaidīt pilno pasūtījumu" Jūs izvēlaties veikt apmaksu un saņemt pilno pasūtījumu pēc augstāk norādītā datuma. Produkts/-i, kas atzīmēti ar "Vairs neražo" statusu tiks piegādāti pēc "Pieejamais daudzums" apjomiem.*</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Pasūtīt tikai pieejamās preces" Jūs izvēlaties veikt apmaksu un pasūtīt preces atbilstoši "Pieejamais daudzums" kolonnai.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Veikt 2 piegādes" Jūs izvēlaties veikt apmaksu un šobrīd saņemmt preces atbilstoši "Pieejamais daudzums" kollonai un pārējās preces ar 2. piegādi augstāk norādītajā datumā.</p>
                                
                                <p class="font-weight-bold" 
                                   style="font-size: 12px;
                                          text-align: center">
                                       
                                Ja pēc visas šīs informācijas pārskatīšanas vēlaties mainīt nepieciešamos produktu daudzumus vai dzēst kādu no tiem, varat to izdarīt, noklikšķinot uz "Rediģēt pasūtījumu".</p>
                                
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                            
                                
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Gaidīt pilno pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Pasūtīt tikai pieejamās preces</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block">Veikt 2 piegādes (2x piegādes izmaksas)</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editOrder">Rediģēt pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-secondary btn-sm btn-block">Atcelt pasūtījumu</button>
                        
                          </div>
                        </div>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                *Produkti, kas apzīmēti kā <b>"Vairs neražo"</b>, ir pieejami daudzumos, kas palikuši mūsu/ mūsu piegādātāju noliktavās. Citādi - šos produktus vairs nevar pasūtīt.</p>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
            
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->

<!----------------------------------------------- 6. Visu vairs neražo (ir atlikumi)------------------------------------------------------------>        
                            
                        <p class="font-weight-bold">6. Visu vairs neražo (ir atlikumi):</p>
                        
                        <p style="font-size: 14px;">
                                  
                                  Diemžēl visas no Jūsu pasūtītajām precem ir noņemtas no ražošanas, bet vēl ir pieejamas atlikumos- mazākos daudzumos.</p>
                                  
                        <p class="font-weight-bold"
                           style="font-size: 14px;">
                                  
                                  Lūdzam apskatīt produktu pieejamības kopsavilkumu un izvēlēties sev vēlamo risinājumu.</p>
                           
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="row">
                          <div class="col-6">
                          
                                 
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;
                                          padding-top: 40px;">
                                       
                                Tiklīdz izvēlēsieties vēlamo variantu- Jums tiks attēlots pasūtījuma kopsavilkums atkarībā pēc veiktās izvēles. Pēc apstiprinājuma tiksiet novirzīti uz apmaksas lapu.</p>
                                
                                <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Pasūtījums tiks apstrādāts uzreiz pēc Jūsu maksājuma saņemšanas.</p>
                                
                                <p style="font-size: 12px;
                                          text-align: center">
                                       
                                Nospiežot uz "Pasūtīt tikai pieejamās preces" Jūs izvēlaties veikt apmaksu un pasūtīt preces atbilstoši "Pieejamais daudzums" kolonnai.</p>
                                
                                <p class="font-weight-bold" 
                                   style="font-size: 12px;
                                          text-align: center">
                                       
                                Ja pēc visas šīs informācijas pārskatīšanas vēlaties mainīt nepieciešamos produktu daudzumus vai dzēst kādu no tiem, varat to izdarīt, noklikšķinot uz "Rediģēt pasūtījumu".</p>
                                
                                
                          </div>
                          <div class="col-6"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                            
                            
                            <div style="border: 1px solid;
                                        border-radius: 10px;
                                        padding-top: 10px;
                                        margin-bottom: 15px;">
                          
                            <p style="font-size: 14px;
                                          text-align: center;">
                                       
                                Kopā produkti: <b>$pasutijums->KP</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                Piegādes izmaksas: <b>$pasutijums->PI</b></p>
                            
                            <p style="font-size: 14px;
                                      text-align: center;">
                                       
                                PVN: <b>$pasutijums->PVN_likme</b></p>
                            
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Summa apmaksai: $pasutijums->SA</p>
                                
                            <p class="font-weight-bold"
                                   style="font-size: 14px;
                                          text-align: center;">
                                       
                                Apmaksas veids: $pasutijums->AV</p>
                            
                            </div>
                            
                            <button type="button" href="#" class="btn btn-primary btn-md btn-block">Pasūtīt tikai pieejamās preces</button>
                            <button type="button" href="#" class="btn btn-info btn-sm btn-block" data-toggle="modal" data-target="#editOrder">Rediģēt pasūtījumu</button>
                            <button type="button" href="#" class="btn btn-secondary btn-sm btn-block">Atcelt pasūtījumu</button>
                        
                          </div>
                        </div>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Ļoti atvainojamies par sagādātajām neertībām.</p>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
   -->              
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->

<!----------------------------------------------- 7. Visu vairs neražo (nav atlikumi)----------------------------------------------------------->        
                            
                        <p class="font-weight-bold">7. Visu vairs neražo (nav atlikumi):</p>
                        
                        <p class="font-weight-bold" 
                           style="font-size: 14px;">
                                 
                                  Diemžēl visas no Jūsu pasūtītajām precem ir noņemtas no ražošanas un vairs nav pieejamas atlikumos.</p>
                                                             
                        <table class="table table-hover"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td>$prece1->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td>$prece2->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td>$prece3->q</td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Ļoti atvainojamies par sagādātajām neertībām. Pasūtījums ir automātiski atcelts.</p>
                        
                        <p style="font-size: 12px;
                                  text-align: center">
                                       
                                Jautājumu gadījumā varat sazināties ar mums pa talr. $uznemuma_talr vai rakstot uz $uznemuma_e_pasts</p>
                                
            
<!--------------------------------------------------------- ##############---------------------------------------------------------------------->
       
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
            <p>Copyright 2018 &copy; Blic- Business automation</p>
        </footer>
        
    </div>
    
<!------------------------------------------------------- Pop-up Modal's------------------------------------------------------------------------>
            
<!-- Man te ir maza problēma, ka nevaru to Modalu dabūt normālā platumā-pieļauju, ka tev varbūt ir kāda labāka alternatīva šim risinājumam ----->
<!-- + vēl ir tāda lieta, ka tās tabulas, nav īsti responsive... Klientiem būs problēmas darboties no telefoniem- moška ir idejas kā to atrisināt--->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="editOrder">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Rediģēt pasūtījumu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table table-hover table-responsive"
                               style="font-size: 14px;">
                         
                          <thead class="thead-dark">
                             <tr style="text-align: center">
                              <th scope="col"></th>
                              <th scope="col">Preces nosaukums</th>
                              <th scope="col">Artikuls</th>
                              <th scope="col">Daudzums</th>
                              <th scope="col">Pieejamība</th>
                              <th scope="col">Pieejamais daudzums</th>
                              <th scope="col">Piegādes datums</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          
                          <tbody>                       
                            <tr style="text-align: center">             
                              <th scope="row">1</th>
                              <td>$prece1</td>
                              <td>$artikuls1</td>
                              <td><input type="textarea" style="max-width: 20%" rows="1" name=""></td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                              <td><a href="#">☓</a></td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">2</th>
                              <td>$prece2</td>
                              <td>$artikuls2</td>
                              <td><input type="textarea" style="max-width: 20%" rows="1" name=""></td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                              <td><a href="#">☓</a></td>
                            </tr>
                            
                            <tr style="text-align: center">             
                              <th scope="row">3</th>
                              <td>$prece3</td>
                              <td>$artikuls3</td>
                              <td><input type="textarea" style="max-width: 20%" rows="1" name=""></td>
                              <td>✖</td>
                              <td>$pieejamais_daudzums=0</td>
                              <td>$noņemts_no_ražošanas</td>
                              <td><a href="#">☓</a></td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <div class="col"
                               style="font-size: 14px;
                                      padding-top: 10px;
                                      padding-bottom: 40px;">
                        
                            <div style="border: 1px solid;
                                            border-radius: 10px;
                                            padding-top: 10px;
                                            margin-bottom: 15px;">

                                <p style="font-size: 14px;
                                              text-align: center;">

                                    Kopā produkti: <b>$pasutijums->KP</b></p>

                                <p style="font-size: 14px;
                                          text-align: center;">

                                    Piegādes izmaksas: <b>$pasutijums->PI</b></p>

                                <p style="font-size: 14px;
                                          text-align: center;">

                                    PVN: <b>$pasutijums->PVN_likme</b></p>

                                <p class="font-weight-bold"
                                       style="font-size: 14px;
                                              text-align: center;">

                                    Summa apmaksai: $pasutijums->SA</p>

                                <p class="font-weight-bold"
                                       style="font-size: 14px;
                                              text-align: center;">

                                    Apmaksas veids: $pasutijums->AV</p>

                            </div>
                        </div>
                            
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-md btn-block">Veikt apmaksu</button>
                    <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">Atpakaļ</button>
                  </div>
                </div>
              </div>
            </div>
    
<!------------------------------------------------------- #############------------------------------------------------------------------------>
  
<!------------------------------------------------------- Priekš Modal'a skripts--------------------------------------------------------------->
       
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    

<!------------------------------------------------------- #############------------------------------------------------------------------------>
     
</body>
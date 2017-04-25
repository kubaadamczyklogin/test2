<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">   
    <link rel="stylesheet" href="custom.css"> 
    <title>kuba adamczyk</title>
  </head>
  <body>
    <!-- div okładka -->  
    <div class="container-fluid" id="cover">
        <div class="row">
            <!-- pusty div na górze w celu prawidłowego wypośrodkowania tytułu w pionie -->
            <div class="col-12 align-self-start">              
            </div>    
            <!-- tytuł -->
            <div class="col-12 align-self-center">
                <h1 class="display-3 text-center">kuba adamczyk</h1>                
                <h2 class="display-5 text-center">junior web&nbsp;developer</h2>
            </div> 
            <!-- strzałka nadół -->
            <div class="col-12 align-self-end">
                <p class="text-center display-3"><a class="dalej" href="#section1" title="dalej"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>     
    <!-- dalsza część strony jedynie demonstracyjna -->      
<div class="container-fluid section kolor"  id="section1"> 
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">portfolio</h2>
            <h3 class="text-center">kilka wybranych projektów</h3>            
        </div>       
    </div>
        <div class="row">
            <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                <a data-toggle="modal" data-target="#Modal8" title="Zobacz szczegóły projektu">                   
                    <img class="img-fluid rounded" src="img/zlot.jpg" alt="Zlot Poziomek">
                </a>                       
                <div id="Modal8" class="modal fade" role="dialog">                         
                    <div class="modal-dialog modal-lg">         
                        <div class="modal-content"> 
                        <div class="modal-header">                            
                            <h4 class="modal-title">Zlot Poziomek</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                              <p>Strona informująca o imprezie: X Zlot Rowerów Poziomych.
                                 Poza porcją informacji zawiera formularz umożliwiający rejestrację uczestników.
                                 Dane uczestników zapisywane są w prostej tabeli SQL, oraz wysyłane emailem do właściciela strony.
                                 Oczywiście strona jest w pełni responsywna. 
                              </p>  
                              <h5>Wykorzystane technologie:</h5>
                              <ul>
                                  <li>HTML5, CSS3</li>
                                  <li>Framework Bootstrap3</li>
                                  <li>Back-end: PHP</li>
                                  <li>Baza danych MySQL</li>
                                  <li>jQuery</li>
                                  <li>Mapa Google Maps</li>
                              </ul>
                            <a href="http://www.zlotpoziomek.pl/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/zlot.jpg" alt="Zlot poziomek">
                            </a>
                          </div>              
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                <a data-toggle="modal" data-target="#Modal7" title="Zobacz szczegóły projektu">                   
                    <img class="img-fluid rounded" src="img/dadelo.jpg" alt="Test Opisów">
                </a>                       
                <div id="Modal7" class="modal fade" role="dialog">                         
                    <div class="modal-dialog modal-lg">         
                        <div class="modal-content"> 
                        <div class="modal-header">                            
                            <h4 class="modal-title">Dadelo: Test Opisów</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                              <p>Aplikacja ułatwiająca tworzenie opisów do sklepu internetowego.
                                 Służy głównie do testowania - podglądu jak opis produktu będzie się wyświetlał po wgraniu na serwer sklepu.
                                 Posiada wbudowany validator sprawdzający podstawowe błędy skutkujące nieprawidłowym wyświetlaniem się kodu html.
                                 Boczne przyciski umożliwiają wstawianie gotowych modułów html - np filmu z youtube na całą szerokość strony itp. 
                                 Ze względu na specyfikę zleceniodawcy nie jest programem elastycznym - testowany jedynie w przeglądarce firefox,
                                 nie jest przystosowany do smartfonów.                                  
                              </p>  
                              <h5>Wykorzystane technologie:</h5>
                              <ul>
                                  <li>HTML5, CSS3</li>
                                  <li>Java Script, jQuery</li>
                                  <li>Back-end: PHP</li>  
                                  <li>Pakiet ikon Font Awesome</li>
                              </ul>
                            <a href="http://www.kubaadamczyk.pl/Dadelo/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/dadelo.jpg" alt="Test Opisów">
                            </a>
                          </div>              
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                <a data-toggle="modal" data-target="#Modal1" title="Zobacz szczegóły projektu">                   
                    <img class="img-fluid rounded" src="img/emu.jpg" alt="EMU">
                </a>                       
                <div id="Modal1" class="modal fade" role="dialog">                         
                    <div class="modal-dialog modal-lg">         
                        <div class="modal-content"> 
                        <div class="modal-header">                            
                            <h4 class="modal-title">Run With Emu</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                              <p>Strona zapowiadająca projekt Run With Emu - uniwersalny pakiet emulatorów.
                                  Prosta strona informacyjna, zbierająca subskrypcje. Responsywna. Posiada 2 wersje językowe (została zaprojektowana z myślą o większej ilości języków).
                                  Przed załadowaniem zbiera informacje na temat odwiedzającego,
                                  zapisuje je i ustawia automatycznie odpowiedni język.
                                  Niestety nie została opublikowana gdyż projekt utknął w miejscu.
                                  Projekt wizualny otrzymałem od zleceniodawcy.
                              </p>  
                              <h5>Wykorzystane technologie:</h5>
                              <ul>
                                  <li>HTML5, CSS3</li>
                                  <li>Framework Bootstrap3</li>
                                  <li>Obiektowy PHP</li>
                                  <li>Wersje językowe w plikach xml</li>
                                  <li>Baza danych MySQL do przechowywania informacji o odwiedzinach i subskrybentach</li>               
                              </ul>
                            <a href="http://www.kubaadamczyk.pl/Emu/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/emu.jpg" alt="EMU">
                            </a>
                          </div>              
                        </div>
                    </div>
                </div>    
            </div>
                <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                    <a data-toggle="modal" data-target="#Modal2" title="Zobacz szczegóły projektu">                   
                        <img class="img-fluid rounded" src="img/warsztaty.jpg" alt="Warsztaty Z Elektroniki">
                    </a>                       
                    <div id="Modal2" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">         
                        <div class="modal-content"> 
                          <div class="modal-header">                            
                            <h4 class="modal-title">Warsztaty Z Elektroniki</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                              <p>Strona wizytówka utworzona dla znajomego elektronika, informująca o kursach dla młodzieży.
                                 Priorytetem był estetyczny wygląd i czytelny przekaz informacji.
                                 Otrzymałem jedynie teksty oraz logo, wykonałem projekt łącznie z warstwą programistyczną. 
                              </p>  
                              <h5>Wykorzystane technologie:</h5>
                              <ul>
                                  <li>HTML5, CSS3</li>
                                  <li>Framework Bootstrap3</li>
                                  <li>Biblioteka javascript jQuery z rozszerzeniem jQuery UI</li>
                                  <li>Back-end: PHP</li>                                                                                   
                              </ul>
                            <a href="http://www.kubaadamczyk.pl/DlaMarka/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/warsztaty.jpg" alt="Warsztaty Z Elektroniki">
                            </a>
                          </div>                        
                        </div>
                      </div>
                    </div>    
                </div>
                <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                    <a data-toggle="modal" data-target="#Modal3" title="Zobacz szczegóły projektu">                    
                        <img class="img-fluid rounded" src="img/dworas.jpg" alt="Dworas">
                    </a>                       
                    <div id="Modal3" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">         
                        <div class="modal-content"> 
                          <div class="modal-header">
                            <h4 class="modal-title">Dworas</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                              <p>Wizytówka firmy budowlanej. Prosta strona z galerią oraz formularzem kontaktowym.
                                 Oczywiście dostosowana również do telefonów komórkowych, responsywna. 
                              </p>  
                              <h5>Wykorzystane technologie:</h5>
                              <ul>
                                  <li>HTML5, CSS3</li>
                                  <li>Framework Bootstrap3</li>
                                  <li>Szablony Smarty</li>
                                  <li>Obiektowy PHP</li>  
                                  <li>Galeria jQuery Lightbox v2.7.1</li>
                              </ul>
                            <a href="http://www.dworas.pl/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/dworas.jpg" alt="Dworas">
                            </a>
                          </div>                         
                        </div>
                      </div>
                    </div>    
                </div>
                <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                   
                    <a data-toggle="modal" data-target="#Modal5" title="Zobacz szczegóły projektu">                   
                        <img class="img-fluid rounded" src="img/sknbiolkom.jpg" alt="Sknbiolkom">
                    </a>                       
                    <div id="Modal5" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">         
                       <div class="modal-content"> 
                         <div class="modal-header">
                            <h4 class="modal-title">Studencki Koło Biologii Komórki i Ultrastruktury</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                            <p>Stron domowa bydgoskiego koła studenckiego. Kilka podstron, galeria, formularz kontaktowy.
                            Strona posiada zintegrowany panel do dodawania aktualności (niestety uczestnicy koła nie korzystają z tej funkcjonalności). 
                            Nie jest jeszcze responsywna, pisałem ją dość dawno gdy nie był to jeszcze obowiązujący standard.</p>
                            <h5>Wykorzystane technologie:</h5>
                            <ul>
                                <li>CSS3, HTML5</li>
                                <li>Back-end: PHP</li>
                                <li>Galeria java script RVN-gallery</li>        
                            </ul>
                            <a href="http://www.sknbiolkom.cm.umk.pl/" title="Przejdź do strony" target="_blank"> 
                                <img class="img-fluid rounded" src="img/sknbiolkom.jpg" alt="Sknbiolkom">
                            </a>
                          </div> 
                        </div>
                      </div>
                    </div>  
                    
                </div>
<!--                <div class="col-xs-12  col-sm-6 col-md-4 kafelek">                  
                    <a data-toggle="modal" data-target="#Modal6" title="Zobacz szczegóły projektu">                   
                        <img class="img-fluid rounded" src="img/foto.jpg" alt="Foto Mechanika">
                    </a>                       
                    <div id="Modal6" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">         
                       <div class="modal-content">
                         <div class="modal-header">
                            <h4 class="modal-title">Foto Mechanika Wiesław Adamczyk</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>  
                          <div class="modal-body">
                            <p>Pierwsza kompletna i opublikowana strona mojego autorstwa. Posiada galerię i 2 mapki dojazdu. 
                                Początkowo była napisana jedynie w warstwie wizualnej HTML i CSS. Następnie dodałem jej backend: MVC stworzony w PHP - w ramach ćwiczeń.</p>
                            <h5>Wykorzystane technologie:</h5>
                            <ul>
                                <li>CSS3, HTML5</li>
                                <li>Obiektowy kod PHP</li>
                                <li>Wzorzec MVC</li>
                                <li>Galeria javascript RVN-gallery</li>
                                <li>Mapki Google Maps</li>
                            </ul>
                            <a href="http://www.foto-mechanika.pl/" title="Przejdź do strony" target="_blank">
                                <img class="img-fluid rounded" src="img/foto.jpg" alt="Foto Mechanika">
                            </a>
                          </div>                                               
                        </div>
                      </div>
                    </div>    
                </div>            -->
            <div class="col-12 align-self-end">
                <p class="text-center display-3"><a class="dalej" href="#section2" title="dalej"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>
    <div class="container-fluid section"  id="section2"> 
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">umiejętności</h2>
              <div class="row">   
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">HTML 5</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">CSS 3</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">Java Script</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">jQuery</h3>
                      </div>
                    </div>
                  </div>                
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">Bootstrap</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">PHP</h3>
                      </div>
                    </div>
                  </div>                
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">Smarty</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">XML</h3>
                      </div>
                    </div>
                  </div>                
                  <div class="col-sm-4 kafelek2">
                    <div class="card">
                      <div class="card-block">
                        <h3 class="text-center card-title">MySQL</h3>
                      </div>
                    </div>
                  </div> 
              </div>
            </div> 
            <div class="col-12 align-self-end">
                <p class="text-center display-3"><a class="dalej" href="#section3" title="dalej"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>        
     <div class="container-fluid section"  id="section3"> 
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">o mnie</h2>
                <p class='text-justify'>obecnie pełnię funkcję analityka w dużym sklepie internetowym</p>
                <p class='text-justify'>koduję w niewielkiej przestrzeni czasowej między pracą, rodziną a licznymi pasjami</p>
                <p class='text-justify'>chcę rozwijać się w tej dziedzinie, toteż z radością podejmę się pracy na pełen etat związanej z front, back end'em lub projektowaniem aplikacji webowych</p>
                <p class='text-justify'>jestem otwarty również na inne propozycje w tej materii</p>                
                <h3>kontakt: <a href="mailto:poczta@kubaadamczyk.pl">poczta@kubaadamczyk.pl</a> <a href="tel:poczta@kubaadamczyk.pl">693&nbsp;773&nbsp;711</a></h3>
            </div>
        </div>
     </div>      
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>     
    <script src="custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
  </body>
</html>
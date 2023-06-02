@extends('layoute')
@section('nav-bar')

      <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 text-center">المصلحة العامة</h1>

            <div class="text2">
                <h1>Liste des clients</h1>
                <p>Vous trouverez ci-dessous une liste des personnes qui ont utilisé le système pour effectuer des réservations.
                    Cliquez sur l'icône du crayon
                    de chaque ligne pour voir et modifier les détails du client.
            </div>

       
            <div class="row2">
               <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="card1">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text">$<span class="count">0.00</span></div>
                                <div class="stat-heading">Toutes les réservations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card2">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-cart"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">0</span></div>
                                <div class="stat-heading">nombre total de clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card3">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">0</span></div>
                                <div class="stat-heading">Nouvelles réservations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card4">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left ">
                                <div class="stat-text"><span class="count">0</span></div>
                                <div class="stat-heading">Clients</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
            
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">droits d'auteur &copy; Mon  Application 2023</div>
                <div>
                    <a href="#">politique de confidentialité</a>
                    &middot;
                    <a href="#">Conditions &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>



</div> 
@endsection
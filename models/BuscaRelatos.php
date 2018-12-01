<?php

class BuscaRelatos{
    
    public function buscar( $cidade ){
        $result = Db::queryAll( "SELECT * FROM depoimentos WHERE dep_cidade LIKE '%$cidade%'" );
        
        if( $result != null ){
            $html .= "<div class='col-12 col-md-10'>
                        <div class='slider slider-for'>";
            for( $i = 0; $i < sizeof($result); $i++ ){
                $html .= "<!-- Client Feedback Text  -->
                            <div class='client-feedback-text text-center'>
                                <div class='client'>
                                    <i class='fa fa-quote-left' aria-hidden='true'></i>
                                </div>
                                <div class='client-description text-center'>
                                    <p>“ ".$result[$i]['dep_depoimento']." ”</p>
                                </div>
                                <div class='client-name text-center'>
                                    <h5>".$result[$i]['dep_cidade']."</h5>
                                    <p>".$result[$i]['dep_est_prov']."</p>
                                </div>
                            </div>";
            }
            $html .= "</div>
                    </div>
                <div class='col-12 col-md-6 col-lg-5'>
            <div class='slider slider-nav'>";
            for( $j = 0; $j < sizeof($result); $j++ ){
                $html .= "<div class='client-thumbnail'>
                            
                        </div>";
            }
            $html .= "</div>
                </div>";
            
            return $html;
        }
    }
    
}

?>
<?php
    $signosHoroscopo = 
    ['aries' => 
        ["amor" => "Vas a conocer a alguien que te traerá mucha alegría.",
        "dinero" => "Este mes va a ser complicado.",
        "salud" => "Vas a estar del copón bendito.",
        "trabajo" => "Entra en Infojobs, tu trabajo te espera."],
    'tauro' => 
        ["amor" => "Este mes vas a recibir noticias muy impactantes.",
        "dinero" => "Vas a gozar de mucha riqueza.",
        "salud" => "Paracetamol en mano que vienen curvas.",
        "trabajo" => "Un familiar te va a hacer una oferta que no podrás rechazar."],
    'geminis' => 
        ["amor" => "Tu pareja ha encontrado a otr@. Ánimo.",
        "dinero" => "Va a ser una época dura.",
        "salud" => "Vas a estar con una salud de hierro.",
        "trabajo" => "Algún compañero te va a dar muy buenas noticias."],
    'cancer' => 
        ["amor" => "Vas a conocer al amor de tu vida, ¡estate atento!.",
        "dinero" => "Va a haber puntos altos y bajos.",
        "salud" => "Aguárdate mucho y vigila tu salud, algo se cuece.",
        "trabajo" => "Vas a tener clientes muy cansinos, pero te irá bien."],
    'leo' => 
        ["amor" => "Vas a recibir amor en abundancia, pero tienes que estar preparad@.",
        "dinero" => "Vas a tener pasta para aburrir.",
        "salud" => "No vas a recibir sorpresas ni disgustos.",
        "trabajo" => "Si sigues buscando, encontrarás el trabajo soñado."],
    'virgo' => 
        ["amor" => "Todos ven tu cornamenta, despierta ya.",
        "dinero" => "Con una mano delante y otra detrás vivirás próximamente.",
        "salud" => "Vas a estar bien, sin más.",
        "trabajo" => "Este mes es el ideal para perseguir ese trato con la empresa."],
    'libra' => 
        ["amor" => "La tragedia acecha tu familia, no hagas ese eviaje.",
        "dinero" => "La fortuna está más cerca de lo que crees.",
        "salud" => "Tienes los pulmones a punto para esa actividad.",
        "trabajo" => "Este mes, al paro."],
    'escorpio' => 
        ["amor" => "La comunicación en la relación se está deteriorando, tienes que actuar.",
        "dinero" => "Échate un rasca, este es tu mes.",
        "salud" => "Tendrás algo de tos, poco más.",
        "trabajo" => "Si te mueves, te llamarán."], 
    'sagitario' => 
        ["amor" => "Hay alguien que te desea, y no lo sabes.",
        "dinero" => "Oportunidades se te presentarán este mes para adquirir riquezas.",
        "salud" => "Tienes que actuar antes de que sea demasiado tarde.",
        "trabajo" => "Muchos compañeros quieren decirte algo."],
    'capricornio' => 
        ["amor" => "Este mes toca estar a dos velas y reflexionar sobre lo que estás haciendo.",
        "dinero" => "Ni tanto ni tan poco.",
        "salud" => "Estás fuerte, por eso no te preocupes.",
        "trabajo" => "Un amigo está buscando a un socio para una idea, búscale."],
    'acuario' => 
        ["amor" => "Será un mes normal, con sus idas y venidas.",
        "dinero" => "La fortuna te sonreirá con mucha intensidad, y luego se desvaneecrá.",
        "salud" => "Hay algo que no estás tomando en consideración.",
        "trabajo" => "Recibirás noticias próximamente."],
    'piscis' => 
        ["amor" => "A quien deseas, te desea también.",
        "dinero" => "Estás cerca de adquirir riquezas a montones.",
        "salud" => "Tendrás una salud inmejorable.",
        "trabajo" => "El empleado que contratarás este mes llevará tu empresa hacia las estrellas."]
    ];

    $meses = [
        'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre'
    ];

    function generarTextoHoroscopo($signo, $signosHoroscopo){
        
        if(isset($_REQUEST['calcular'])){
            echo "<img src='images/$signo.png'/>";
            echo "<h2>".strtoupper($signo)."</h2>";
            echo "<div class='signo-horoscopo'>";
            
            foreach($signosHoroscopo[$signo] as $titulo => $descripcion){
                echo "<div class='$titulo-horoscopo'>
                        <h3>$titulo</h3>
                        <p>" . str_repeat($descripcion, 10) . "</p>
                    </div>
                <hr>";
            }
            echo "</div>";
        }
    }
    

    function calcularSignoHoroscopo($mes, $dia){
        $signo = "";
        switch($mes){
            case "enero": 
                $signo = ($dia<21)? "capricornio":"acuario";
                break;
            case "febrero":
                $signo = ($dia<20)? "acuario":"piscis";
                break;
            case "marzo":
                $signo = ($dia<21)? "piscis":"aries";
                break;
            case "abril":
                $signo = ($dia<21)? "aries":"tauro";
                break;
            case "mayo":
                $signo = ($dia<21)? "tauro":"geminis";
                break;
            case "junio":
                $signo = ($dia<22)? "geminis":"cáncer";
                break;
            case "julio":
                $signo = ($dia<23)? "cancer":"leo";
                break;
            case "agosto":
                $signo = ($dia<24)? "leo":"virgo";
                break;
            case "septiembre":
                $signo = ($dia<23)? "virgo":"libra";
                break;
            case "octubre":
                $signo = ($dia<23)? "libra":"escorpio";
                break;
            case "noviembre":
                $signo = ($dia<23)? "escorpio":"sagitario";
                break;
            case "diciembre":
                $signo = ($dia<22)? "sagitario":"capricornio";
                break;
            default:
                $signo = "";
        }
        return $signo;
    }
    
    function generarMeses($meses){
        foreach($meses as $mes){
            echo "<option value='$mes' id='$mes'>". ucfirst($mes). "</option>";
        }
    }
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    /*
     * A
     */
    /**
    * @Route("/jak-trwoga.html", name="jak-trwoga")
    */
    public function jaktrwogaAction()
    {
        return $this->render('default/jak-trwoga.html.twig');
    }
    /**
    * @Route("/czlek-zdechnie.html", name="czlek-zdechnie")
    */
    public function czlekZdechnieAction()
    {
        return $this->render('default/czlek-zdechnie.html.twig');
    }
        
    /*
     * B
     */
    /**
 * @Route("/szczury.html", name="szczury")
 */
public function  szczuryAction()
{
    return $this->render('default/szczury.html.twig');
}
    /**
    * @Route("/bedziePogoda.html", name="bedziePogoda")
    */
    public function bedziePogodaAction()
    {
        return $this->render('default/bedziePogoda.html.twig');
    }

    /**
    * @Route("/naDrabine.html", name="naDrabine")
    */
    public function naDrabineAction()
    {
        return $this->render('default/naDrabine.html.twig');
    }

    /**
 * @Route("/bujac-to-las.html", name="bujac-to-las")
 */
public function  bujactolasAction()
{
    return $this->render('default/bujac-to-las.html.twig');
}
    
    /**
    * @Route("/bogatemu-to.html", name="bogatemu-to")
    */
    public function bogatemuToAction()
    {
        return $this->render('default/bogatemu-to.html.twig');
    }
    /*
     * C
     */
        /**
        * @Route("/chocbys-mial.html", name="chocbys-mial")
        */
       public function chocbysmialAction()
       {
           return $this->render('default/chocbys-mial.html.twig');
       }
       /**
    * @Route("/utrapienia.html", name="utrapienia")
    */
    public function utrapieniaAction()
    {
        return $this->render('default/utrapienia.html.twig');
    }
    
    /**
    * @Route("/nauczycielem.html", name="nauczycielem")
    */
    public function nauczycielemAction()
    {
        return $this->render('default/nauczycielem.html.twig');
    }
    /**
    * @Route("/ciemnota.html", name="ciemnota")
    */
    public function ciemnotaAction()
    {
        return $this->render('default/ciemnota.html.twig');
    }
    
    /**
     * @Route("/D.html", name="D")
     */
    public function DAction()
    {
        return $this->render('default/D.html.twig');
    }
	/**
 		* @Route("/dla-chcacego.html", name="dla-chcacego")
 		*/
		public function dlaChcacegoAction()
		{
			return $this->render('default/dla-chcacego.html.twig');
		}

		/**
 		* @Route("/do-Rzymu.html", name="do-Rzymu")
 		*/
		public function DoRzymuAction()
		{
			return $this->render('default/do-Rzymu.html.twig');
		}

		/**
 		* @Route("/dobry-zwyczaj.html", name="dobry-zwyczaj")
 		*/
		public function DobryZwyczaj()
		{
			return $this->render('default/dobry-zwyczaj.html.twig');
		}

    /*
     * E
     */
    /**
 * @Route("/miedzy-powiedzeniem.html", name="mierzy-powiedzeniem")
 */
public function  MiedzyPowiedzeniemAction()
{
    return $this->render('default/miedzy-powiedzeniem.html.twig');
}
    /**
 * @Route("/zle.html", name="zle")
 */
public function zleAction()
{
    return $this->render('default/zle.html.twig');
}
    
    /**
    * @Route("/bez-matki.html", name="bez matki")
    */
    public function bezmatkiAction()
    {
    return $this->render('default/bez-matki.html.twig');
    }
    
    
    /*
     * F
     */
    /**
 * @Route("/dziad-jak.html", name="dziad-jak")
 */
public function  dziadJakAction()
{
    return $this->render('default/dziad-jak.html.twig');
}
    
    
    
    /**
 * @Route("/Aby-do-wiosny.html", name="Aby-do-wiosny")
 */
    public function AbydowiosnyAction()
{
    return $this->render('default/Aby-do-wiosny.html.twig');
}








/**
 * @Route("/co-lato-odklada.html", name="co-lato-odklada")
 */
public function coLatoOdkladaAction()
{
    return $this->render('default/co-lato-odklada.html.twig');
}

    /*
     * G
     */

    /**
    * @Route("/stare-wino.html", name="stare-wino")
    */
    public function stareWinoAction()
    {
        return $this->render('default/stare-wino.html.twig');
    }

    /**
    * @Route("/gdyPszczola.html", name="gdy Pszczola")
    */
    public function gdyPszczolaAction()
    {
        return $this->render('default/gdyPszczola.html.twig');
    }
    /*
     * H
     */

    /**
    * @Route("/suchy-marzec.html", name="suchy-marzec")
    */
    public function suchyMarzecAction()
    {
        return $this->render('default/suchy-marzec.html.twig');
    }

    /*
     * I
     */
    
    /**
    * @Route("/im-dab-starszy.html", name="im-dab-starszy")
    */
    public function ImDabStarszyAction()
    {
    return $this->render('default/im-dab-starszy.html.twig');
    }   

    /*
     * J
     */
    
   /**
     * @Route("/slowa-nalezy.html", name="slowa-nalezy")
     */
     public function slowanalezyAction()
     {
        return $this->render('default/slowa-nalezy.html.twig');
     }
     
    /*
     * K
     */
     
      /**
     * @Route("/Kobiety.html", name="Kobiety")
     */
     public function KobietyAction()
     {
        return $this->render('default/Kobiety.html.twig');
     }
     
     
     /**
      /**
 * @Route("/natwarde.html", name="natwarde")
 */
public function  natwardeAction()
{
    return $this->render('default/natwarde.html.twig');
}
     /**
     * @Route("/za-mundurem.html", name="za-mundurem")
     */
     public function zamunduremAction()
     {
        return $this->render('default/za-mundurem.html.twig');
     }
      /**
     * @Route("/uszy.html", name="uszy")
     */
     public function uszyAction()
     {
        return $this->render('default/uszy.html.twig');
     }
      
      /**
    * @Route("/hilary-zapowiada.html", name="hilary-zapowiada")
    */
    public function hilaryZapowiadaAction()
    {
        return $this->render('default/hilary-zapowiada.html.twig');
    }
     /**
    * @Route("/gabrielu.html", name="gabrielu")
    */
    public function gabrieluAction()
    {
        return $this->render('default/gabrielu.html.twig');
    }

	/**
	* @Route("/kto-ma-uszy.html", name="kto-ma-uszy")
	*/
	public function KtoMaUszyAction()
	{
		return $this->render('default/kto-ma-uszy.html.twig');
	}
	
    /*
     * L
     */
    /**
    * @Route("/wrobel.html", name="Wrobel")
    */
    public function wrobelAction()
    {
        return $this->render('default/wrobel.html.twig');
    }
    /**
    * @Route("/dmuchac.html", name="lepiej-dmuchac")
    */
    public function dmuchacAction()
    {
        return $this->render('default/dmuchac.html.twig');
    }
/**
 * @Route("/dwoch-glupich.html", name="dwoch-glupich")
 */
public function  dwochglupichAction()
{
    return $this->render('default/dwochglupich.html.twig');
}
    /**
    * @Route("/lepiej-z-madrym.html", name="lepiej-z-madrym")
    */
    public function lepiejZmadrymAction()
    {
        return $this->render('default/lepiej-z-madrym.html.twig');
    }

/**
 * @Route("/lepsza.html", name="lepsza")
 */
public function  lepszaAction()
{
    return $this->render('default/lepsza.html.twig');
}

    /*
     * M
     */
    /**
    * @Route("/bujac-to.html", name="bujac-to")
    */
    public function bujacToAction()
    {
        return $this->render('default/bujac-to.html.twig');
    }
    
    /**
    * @Route("/milczenie.html", name="milczenie")
    */
    public function milczenieAction()
    {
        return $this->render('default/milczenie.html.twig');
    }
    
    /**
     * @Route("/dlatego-dwie-uszy.html", name="dlatego-dwie-uszy")
    */
     public function dlategodwieuszyAction()
    {
    return $this->render('default/dlatego-dwie-uszy.html.twig');
    }
    /**
    * @Route("/mala-iskierka.html", name="mala-iskierka")
    */
    public function malaIskierkaAction()
    {
        return $this->render('default/mala-iskierka.html.twig');
    }
    /**
    * @Route("/mowa-jest.html", name="mowa-jest")
    */
    public function mowaJestSrebremAction()
    {
        return $this->render('default/mowa-jest.html.twig');
    }
    
    /*
     * N
     */
    
    /**
     * @Route("/najlepsza.html", name="najlepsza")
     */
    public function  NajlepszaAction()
    {
        return $this->render('default/najlepsza.html.twig');
    }
    
    /**
    * @Route("/gdzie-glowa-rzadzi.html", name="gdzie-glowa-rzadzi")
    */
   public function  gdzieGlowaRzadziAction()
   {
       return $this->render('default/gdzie-glowa-rzadzi.html.twig');
   }
   
    /**
    * @Route("/co-w-kobiecym.html", name="co-w-kobiecym")
    */
   public function  coWKobiecymAction()
   {
       return $this->render('default/co-w-kobiecym.html.twig');
   }
   
    /*
     * O
     */
    
    /**
     * @Route("/glupota-ludzka.html", name="glupota-ludzka")
     */
    public function glupotaludzkaAction()
    {
    return $this->render('default/glupota-ludzka.html.twig');
    }
        
    /*
     * P
     */

    /**
     * @Route("/prawda.html", name="prawda")
     */
    public function prawdaAction()
    {
        return $this->render('default/prawda.html.twig');
    }

    /**
     * @Route("/szewc-bez.html", name="szewc-bez")
     */
     public function szewcbezAction()
     {
     return $this->render('default/szewc-bez.html.twig');
     } 
     
    /*
     * Q
     */
     
     /**
    * @Route("/rozmawiajac-z-glupcem.html", name="rozmawiajac-z-glupcem")
    */
    public function rozmawiajaczglupcemAction()
    {
       return $this->render('default/rozmawiajac-z-glupcem.html.twig');
    } 

    /*
     * R
     */

    /**
     * @Route("/co-za-duzo.html", name="co-za-duzo")
     */
      public function coZaDuzoAction()
     {
     return $this->render('default/co-za-duzo.html.twig');
     } 
      
    /*
     * S
     */

    /**
     * @Route("/jak-sobie.html", name="jak-sobie")
     */
    public function jakSobieAction()
    {
        return $this->render('default/jak-sobie.html.twig');
    }

    /**
     * @Route("/i-pity.html", name="i-pity")
     */
    public function  ipityAction()
    {
        return $this->render('default/i-pity.html.twig');
    }

    /**
     * @Route("/burke-fear.html", name="burke-fear")
     */
    public function  burkefearAction()
    {
        return $this->render('default/burke-fear.html.twig');
    }

    /**
     * @Route("/a-man.html", name="a-man")
     */
    public function  amanAction()
    {
        return $this->render('default/a-man.html.twig');
    }

    /*
     * T
     */

     /**
     * @Route("/czlowiekowi-w-zyciu.html", name="czlowiekowi-w-zyciu")
     */
     public function czlowiekowiWZyciuAction()
     {
        return $this->render('default/czlowiekowi-w-zyciu.html.twig');
     }
     
    /*
     * U
     */

      /**
     * @Route("/Trafila.html", name="Trafila")
     */
     public function TrafilaAction()
     {
        return $this->render('default/Trafila.html.twig');
     }
       /**
     * @Route("/Nieszczescia.html", name="Nieszczescia")
     */
     public function NieszczesciaAction()
     {
        return $this->render('default/Nieszczescia.html.twig');

     }

    /*
     * V
     */
    
    /**
    * @Route("/i-tygrys-nosi.html", name="i-tygrys-nosi")
    */
    public function  iTygrysNosiAction()
    {
        return $this->render('default/i-tygrys-nosi.html.twig');
    }

    /**
     * @Route("/gdzie-sie-z-checia.html", name="gdzie-sie-z-checia")
     */
    public function gdzieSieZCheciaAction()
    {
        return $this->render('default/gdzie-sie-z-checia.html.twig');
    }

    /*
     * W
     */
    
    /**
     * @Route("/dobre-lekarstwo.html", name="dobre-lekarstwo")
    */
     public function  dobrelekarstwoAction()
    {
    return $this->render('default/dobre-lekarstwo.html.twig');
    }
    

    /*
     * X
     */
    
    /**
    * @Route("/regula-prosta.html", name="regula-prosta")
    */
    public function regulaprostaAction()
    {
        return $this->render('default/regula-prosta.html.twig');
    }

    /**
    * @Route("/coKomu.html", name="coKomu")
    */
    public function coKomuAction()
    {
        return $this->render('default/coKomu.html.twig');
    }
    /*
     * Y
     */
    
    /**
 * @Route("/kto-pod-kim-dolki.html", name="kto-pod-kim-dolki")
 */
public function ktopodkimdolkiAction()
{
    return $this->render('default/kto-pod-kim-dolki.html.twig');
}
    
    /**
     * @Route("/zapomnialwol.html", name="zapomnialwol")
    */
    public function zapomnialwolAction()
    {
        return $this->render('default/zapomnialwol.html.twig');
    }
    
    /**
    * @Route("/Trud-czlowieczy.html", name="Trud-czlowieczy")
    */
    public function TrudczlowieczyAction()
    {
       return $this->render('default/Trud-czlowieczy.html.twig');
    }
    /**
     * @Route("/ktoziarno.html", name="ktoziarno")
     */
    public function ktoziarnoAction()
    {
        return $this->render('default/ktoziarno.html.twig');
    }
    /**
   * @Route("/smiech.html", name="smiech")
   */
  public function smiechAction()
  {
    return $this->render('default/smiech.html.twig');
  }

   /*
     * AA
     */
  /**
 * @Route("/dla-chcacego-nic-trudnego.html", name="dla-chcacego-nic-trudnego")
 */
public function dlachcacegonictrudnegoAction()
{
    return $this->render('default/dla-chcacego-nic-trudnego.html.twig');
}

/**
 * @Route("/kozka.html", name="kozka")
 */
public function kozkaAction()
{
    return $this->render('default/kozka.html.twig');
}

/**
 * @Route("/biedny.html", name="biedny")
 */
public function biedneyAction()
{
    return $this->render('default/biedny.html.twig');
}
/**
 * @Route("/zyda.html", name="zyda")
 */
public function zydaAction()
{
    return $this->render('default/zyda.html.twig');
}

/**
 * @Route("/Aksamity.html", name="Aksamity")
 */
public function AksamityAction()
{
    return $this->render('default/Aksamity.html.twig');
}
/*
     * CC
     */
/**
 * @Route("/do-rzymu-przez-krym.html", name="do-rzymu-przez-krym")
 */
public function dorzymuprzezkrymAction()
{
    return $this->render('default/do-rzymu-przez-krym.html.twig');
}
}

<?php

/* __string_template__5241f1224dd23eab319ad137d5a79fca0580ce1876edbb1a73474d6d72b80607 */
class __TwigTemplate_abb4f2d238725f1da49ece17d38895c228dcfea6e408fc8556bc3f1b87d75984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"index.php?route=product/category&path=67\">ASUS</a></li>
          <li><a href=\"index.php?route=product/category&path=92\">Cougar</a></li>
          <li><a href=\"index.php?route=product/category&path=24\">Plantronics</a></li>
          <li><a href=\"index.php?route=product/category&path=88_93\">Logitech</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 24
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 26
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 33
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li>Контактная информация</li>
\t\t\t<li>Почта: info@avtech.uz</li>
<li>Телефон: +998909561133 </li>
<li>График работы магазина</li>
<li>В будние дни: 9:00–18:00</li>
<li>В выходные: 10:00-17:00</li>
<li>Обед с 13:00 - 14:00</li>
<li>Адрес: Ташкент, <li>ул. Абдуллы Каххара, 49А</li>
        </ul>
      </div>
      
    </div>
    <hr>
    <p>";
        // line 48
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
  </div>
</footer>
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 52
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "__string_template__5241f1224dd23eab319ad137d5a79fca0580ce1876edbb1a73474d6d72b80607";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 54,  124 => 52,  120 => 51,  114 => 48,  96 => 33,  86 => 28,  80 => 27,  74 => 26,  69 => 24,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="index.php?route=product/category&path=67">ASUS</a></li>*/
/*           <li><a href="index.php?route=product/category&path=92">Cougar</a></li>*/
/*           <li><a href="index.php?route=product/category&path=24">Plantronics</a></li>*/
/*           <li><a href="index.php?route=product/category&path=88_93">Logitech</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           */
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_contact }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li>Контактная информация</li>*/
/* 			<li>Почта: info@avtech.uz</li>*/
/* <li>Телефон: +998909561133 </li>*/
/* <li>График работы магазина</li>*/
/* <li>В будние дни: 9:00–18:00</li>*/
/* <li>В выходные: 10:00-17:00</li>*/
/* <li>Обед с 13:00 - 14:00</li>*/
/* <li>Адрес: Ташкент, <li>ул. Абдуллы Каххара, 49А</li>*/
/*         </ul>*/
/*       </div>*/
/*       */
/*     </div>*/
/*     <hr>*/
/*     <p>{{ powered }}</p>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* </body></html>*/

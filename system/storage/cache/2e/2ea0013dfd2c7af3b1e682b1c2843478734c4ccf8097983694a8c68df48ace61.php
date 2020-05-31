<?php

/* __string_template__d24850ed8aadf5f279ce1e3c4a92ded40a1f3e242c030190701cf5fb30be6768 */
class __TwigTemplate_09613b45fa626fe3ccba6adf7c085f8c8148f8de51a9400be27556e708c6ba80 extends Twig_Template
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
          <li><a href=\"";
        // line 17
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 18
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 23
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"/index.php?route=product/category&path=67\">";
        // line 25
        echo (isset($context["text_asus"]) ? $context["text_asus"] : null);
        echo "</a></li>
          <li><a href=\"/index.php?route=product/category&path=92\">";
        // line 26
        echo (isset($context["text_cougar"]) ? $context["text_cougar"] : null);
        echo "</a></li>
          <li><a href=\"/index.php?route=product/category&path=227\">";
        // line 27
        echo (isset($context["text_mi"]) ? $context["text_mi"] : null);
        echo "</a></li>
          <li><a href=\"/index.php?route=product/category&path=24\">";
        // line 28
        echo (isset($context["text_plantronics"]) ? $context["text_plantronics"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 32
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li>Телефоны: +998909561133,<br> +998977171133</li>
          <li>Почта: info@computec.uz</li>
          <li>Адрес: Кичик Халка Йули, 59</li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 41
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
  </div>
</footer>
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 45
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "__string_template__d24850ed8aadf5f279ce1e3c4a92ded40a1f3e242c030190701cf5fb30be6768";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 47,  129 => 45,  125 => 44,  119 => 41,  107 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  83 => 23,  74 => 19,  68 => 18,  62 => 17,  57 => 15,  54 => 14,  49 => 11,  38 => 9,  34 => 8,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
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
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="/index.php?route=product/category&path=67">{{ text_asus }}</a></li>*/
/*           <li><a href="/index.php?route=product/category&path=92">{{ text_cougar }}</a></li>*/
/*           <li><a href="/index.php?route=product/category&path=227">{{ text_mi }}</a></li>*/
/*           <li><a href="/index.php?route=product/category&path=24">{{ text_plantronics }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_contact }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li>Телефоны: +998909561133,<br> +998977171133</li>*/
/*           <li>Почта: info@computec.uz</li>*/
/*           <li>Адрес: Кичик Халка Йули, 59</li>*/
/*         </ul>*/
/*       </div>*/
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

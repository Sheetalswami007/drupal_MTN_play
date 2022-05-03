<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mtn/templates/page.html.twig */
class __TwigTemplate_d6729809f7690e7084b1704ab4216a61 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
   <head>
      <meta charset=\"utf-8\" />
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
      <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
      <title>MTN Play</title>
      <meta name=\"description\" content=\"\" />
      <meta name=\"keywords\" content=\"\" />
      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/image/mtn-logo.png\" />
   </head>
   <body>
      <div class=\"top-header\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-12\">
                  <ul class=\"top-menu text-right\">
                     <li><a href=\"javascript:void(0)\">Why MTN?</a></li>
                     <li><a href=\"javascript:void(0)\">Foundation</a></li>
                     <li><a href=\"javascript:void(0)\">Careers</a></li>
                     <li><a href=\"javascript:void(0)\">Investors</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12\">
               <nav class=\"navbar navbar-expand-md main-header\">
                  <a class=\"navbar-brand\" href=\"play.html\"><img src=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 31, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 31, $this->source)), "html", null, true);
        echo "/image/mtn-logo.png\"></a>
                  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mt-navbar\" aria-controls=\"mt-navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <i class=\"fas fa-align-justify\"></i>
                  </button>
                  <div class=\"collapse navbar-collapse\" id=\"mt-navbar\">
                     <div class=\"navbar-nav\">
                        <li class=\"nav-item\">
                           <a href=\"javascript:void(0)\" class=\"nav-link\">Shop</a>
                        </li>
                        <li class=\"nav-item\">
                           <a href=\"play.html\" class=\"nav-link\">Play</a>
                        </li>
                        <li class=\"nav-item\">
                           <a href=\"javascript:void(0)\" class=\"nav-link\">Business</a>
                        </li>
                        <li class=\"nav-item\">
                           <a href=\"javascript:void(0)\" class=\"nav-link\">Offers</a>
                        </li>
                     </div>
                  </div>
                  <div class=\"navbar-nav ml-auto d-block-mobile\">
                     <li class=\"nav-item\">
                        <a href=\"javascript:void(0)\" class=\"nav-link\">
                           <div class=\"form-group m-0\">
                              <input type=\"text\" class=\"form-control m-0\" placeholder=\"Search products\">
                              <img src=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 56, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 56, $this->source)), "html", null, true);
        echo "/image/icons-search.png\">
                           </div>
                        </a>
                     </li>
                     <li class=\"nav-item\">
                        <a href=\"javascript:void(0)\" class=\"nav-link cart-top\">
                        <img src=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 62, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 62, $this->source)), "html", null, true);
        echo "/image/cart.png\">
                        <span class=\"cart-count\">2</span>
                        </a>
                     </li>
                     <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdownMenuLink\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                           <div class=\"profile-section\">
                              <img src=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 69, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 69, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" width=\"40\" height=\"40\" class=\"rounded-circle mr-2\">
                              <div class=\"profile-name\">
                                 <p class=\"m-0\">Abukabar <span class=\"float-right\"><i class=\"fas fa-chevron-down ml-2\"></i></span></p>
                                 <p class=\"m-0\"><small>0806 677 6478</small></p>
                              </div>
                           </div>
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                           <a class=\"dropdown-item\" href=\"javascript:void(0)\">Profile</a>
                           <a class=\"dropdown-item\" href=\"javascript:void(0)\">Log Out</a>
                        </div>
                     </li>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 col-12\">
               <nav class=\"navbar p-0 play-top-filter navbar-expand-md bg-transparent mt-5 shadow-0\">
                  <div class=\"navbar-nav d-block-mobile-pagination\">
                     <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link ml-0\">Home</a>
                     </li>
                     <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link text-white\">Play</a>
                     </li>
                  </div>
                  <div class=\"navbar-nav ml-auto d-block-mobile\">
                     <li class=\"dropdown megamenu-li nav-item\">
                        <a class=\"dropdown-toggle nav-link\" href=\"#\" id=\"categories\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Categories <i class=\"fas fa-chevron-down\"></i></a>
                        <div class=\"dropdown-menu megamenu p-2\" aria-labelledby=\"categories\">
                           <div class=\"row\">
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category\">
                                    <h6 class=\"text-white mb-3\">Categories</h6>
                                    <div class=\"row\">
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 109
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 109, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 109, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Movies</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 117
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 117, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 117, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">TV Shows</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 125
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 125, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 125, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Kids</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 133, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 133, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Nollywood</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 141
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 141, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 141, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">mPulse</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category-menu\">
                                    <h6 class=\"text-white mb-3\">Generes</h6>
                                    <ul>
                                       <li><a href=\"#\">Drama</a></li>
                                       <li><a href=\"#\">Hollywood</a></li>
                                       <li><a href=\"#\">Action and adventure</a></li>
                                       <li><a href=\"#\">Sports</a></li>
                                       <li><a href=\"#\">Romance</a></li>
                                       <li><a href=\"#\">Thriller</a></li>
                                       <li><a href=\"#\">Comedy</a></li>
                                       <li><a href=\"#\">Fantasy</a></li>
                                       <li><a href=\"#\">Suspense</a></li>
                                       <li><a href=\"#\">Horror</a></li>
                                       <li><a href=\"#\">Award winners</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class=\"dropdown megamenu-li nav-item\">
                        <a class=\"dropdown-toggle nav-link\" href=\"#\" id=\"channels\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Channels <i class=\"fas fa-chevron-down\"></i></a>
                        <div class=\"dropdown-menu megamenu p-2\" aria-labelledby=\"channels\">
                           <div class=\"row\">
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category\">
                                    <h6 class=\"text-white mb-3\">Categories</h6>
                                    <div class=\"row\">
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 181
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 181, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 181, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Movies</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 189
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 189, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 189, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">TV Shows</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 197
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 197, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 197, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Kids</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 205
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 205, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 205, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Nollywood</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 213
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 213, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 213, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">mPulse</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category-menu\">
                                    <h6 class=\"text-white mb-3\">Generes</h6>
                                    <ul>
                                       <li><a href=\"#\">Drama</a></li>
                                       <li><a href=\"#\">Hollywood</a></li>
                                       <li><a href=\"#\">Action and adventure</a></li>
                                       <li><a href=\"#\">Sports</a></li>
                                       <li><a href=\"#\">Romance</a></li>
                                       <li><a href=\"#\">Thriller</a></li>
                                       <li><a href=\"#\">Comedy</a></li>
                                       <li><a href=\"#\">Fantasy</a></li>
                                       <li><a href=\"#\">Suspense</a></li>
                                       <li><a href=\"#\">Horror</a></li>
                                       <li><a href=\"#\">Award winners</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class=\"dropdown megamenu-li nav-item\">
                        <a class=\"dropdown-toggle nav-link\" href=\"#\" id=\"vas\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">VAS <i class=\"fas fa-chevron-down\"></i></a>
                        <div class=\"dropdown-menu megamenu p-2\" aria-labelledby=\"vas\">
                           <div class=\"row\">
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category\">
                                    <h6 class=\"text-white mb-3\">Categories</h6>
                                    <div class=\"row\">
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 253
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 253, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 253, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Movies</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 261
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 261, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 261, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">TV Shows</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 269
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 269, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 269, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Kids</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 277
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 277, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 277, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">Nollywood</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=\"col-lg-4 col-sm-4 col-6\">
                                          <div class=\"category-box\">
                                             <img src=\"";
        // line 285
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 285, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 285, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                                             <div class=\"category-box-overlay\">
                                                <p class=\"m-0\">mPulse</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class=\"col-lg-6 col-sm-12 col-12\">
                                 <div class=\"drop-category-menu\">
                                    <h6 class=\"text-white mb-3\">Generes</h6>
                                    <ul>
                                       <li><a href=\"#\">Drama</a></li>
                                       <li><a href=\"#\">Hollywood</a></li>
                                       <li><a href=\"#\">Action and adventure</a></li>
                                       <li><a href=\"#\">Sports</a></li>
                                       <li><a href=\"#\">Romance</a></li>
                                       <li><a href=\"#\">Thriller</a></li>
                                       <li><a href=\"#\">Comedy</a></li>
                                       <li><a href=\"#\">Fantasy</a></li>
                                       <li><a href=\"#\">Suspense</a></li>
                                       <li><a href=\"#\">Horror</a></li>
                                       <li><a href=\"#\">Award winners</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class=\"megamenu-li nav-item\">
                        <a href=\"#\" class=\"nav-link\">My watchlist</a>
                     </li>
                  </div>
               </nav>
            </div>
         </div>
      </div>

      <div class=\"container-fluid mt-5\">
         <div class=\"row\">
            <div class=\"col-12\">
               <div id=\"main-slider\" class=\"owl-carousel\" >
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 330, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 330, $this->source)), "html", null, true);
        echo "/image/banner-top1.png\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 332
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 332, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 332, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 338
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 338, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 338, $this->source)), "html", null, true);
        echo "/image/continue2.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 340
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 340, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 340, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 346
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 346, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 346, $this->source)), "html", null, true);
        echo "/image/banner-top1.png\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 348
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 348, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 348, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 354
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 354, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 354, $this->source)), "html", null, true);
        echo "/image/continue4.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 356
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 356, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 356, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 362
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 362, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 362, $this->source)), "html", null, true);
        echo "/image/continue3.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 364
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 364, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 364, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\" >
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 370
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 370, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 370, $this->source)), "html", null, true);
        echo "/image/continue4.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 372
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 372, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 372, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class=\"container mt-5\">
         <div class=\"row\">
            <div class=\"col-12\">
               <ul class=\"button-group-top\">
                  <li><a href=\"#/\">Nollywood</a></li>
                  <li><a href=\"#/\">Hollywood</a></li>
                  <li><a href=\"#/\">Sports 🏉</a></li>
                  <li><a href=\"#/\">Comedy</a></li>
                  <li><a href=\"#/\">Drama</a></li>
                  <li><a href=\"#/\">Thriller</a></li>
                  <li><a href=\"#/\">Fantasy</a></li>
                  <li><a href=\"#/\">Horror</a></li>
                  <li><a href=\"#/\">TV Shows</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-md-12\">
               <h5 class=\"text-white mb-3 mt-5\">Continue streaming (7) 👀</h5>
               <div id=\"cotinue-streaming-slider\" class=\"owl-carousel\">
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 405
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 405, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 405, $this->source)), "html", null, true);
        echo "/image/continue1.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 407
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 407, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 407, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                     <div class=\"progress progress-bar-streaming\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 416
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 416, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 416, $this->source)), "html", null, true);
        echo "/image/continue2.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 418
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 418, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 418, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                     <div class=\"progress progress-bar-streaming\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 427
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 427, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 427, $this->source)), "html", null, true);
        echo "/image/continue3.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 429
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 429, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 429, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                     <div class=\"progress progress-bar-streaming\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 438
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 438, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 438, $this->source)), "html", null, true);
        echo "/image/continue4.webp\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 440
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 440, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 440, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                        </div>
                     </div>
                     <div class=\"progress progress-bar-streaming\">
                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 75%\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-md-12\">
               <h5 class=\"text-white mb-3 mt-5\">Selection for you 👇 <span class=\"float-right\"><small><a href=\"#/\" class=\"play-color\">View all <i class=\"fas fa-chevron-right ml-2 \"></i></a></small></span></h5>
               <div id=\"selection-for-you-slider\" class=\"owl-carousel\">
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 458
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 458, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 458, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 460
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 460, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 460, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 467
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 467, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 467, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 469
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 469, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 469, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 476
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 476, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 476, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 478
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 478, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 478, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 485
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 485, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 485, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 487
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 487, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 487, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container mt-5\">
         <div class=\"row\">
            <div class=\"col-12\">
               <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li><a href=\"#Podcasts\" class=\"active\" aria-controls=\"Podcasts\" role=\"tab\" data-toggle=\"tab\">Podcasts</a></li>
                  <li><a href=\"#Music\" aria-controls=\"Music\" role=\"tab\" data-toggle=\"tab\">Music</a></li>
               </ul>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-12 \">
               <div class=\"tab-content\">
                  <div role=\"tabpanel\" class=\"tab-pane active\" id=\"Podcasts\">
                     <div id=\"podcost-slider\" class=\"owl-carousel\">
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 512
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 512, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 512, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 514
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 514, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 514, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 520
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 520, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 520, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 522
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 522, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 522, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 528
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 528, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 528, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 530
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 530, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 530, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 536
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 536, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 536, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 538
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 538, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 538, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane\" id=\"Music\">
                     <div id=\"music-slider\" class=\"owl-carousel\">
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 548
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 548, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 548, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 550
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 550, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 550, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 556
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 556, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 556, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 558
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 558, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 558, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 564
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 564, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 564, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 566
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 566, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 566, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 572
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 572, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 572, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 574
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 574, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 574, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container mt-5\">
         <div class=\"row\">
            <div class=\"col-12\">
               <ul class=\"nav nav-tabs\" role=\"tablist\">
                  <li><a href=\"#Movies\" class=\"active\" aria-controls=\"Movies\" role=\"tab\" data-toggle=\"tab\">Movies</a></li>
                  <li><a href=\"#Shows\" aria-controls=\"Shows\" role=\"tab\" data-toggle=\"tab\">Shows</a></li>
                  <li><a href=\"#LiveTv\" aria-controls=\"LiveTv\" role=\"tab\" data-toggle=\"tab\">Live TV</a></li>
               </ul>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-12 \">
               <div class=\"tab-content\">
                  <div role=\"tabpanel\" class=\"tab-pane active\" id=\"Movies\">
                     <div id=\"movies-slider\" class=\"owl-carousel\">
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 601
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 601, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 601, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 603
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 603, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 603, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 609
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 609, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 609, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 611
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 611, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 611, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 617
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 617, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 617, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 619
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 619, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 619, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 625
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 625, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 625, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 627
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 627, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 627, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane\" id=\"Shows\">
                     <div id=\"shows-slider\" class=\"owl-carousel\">
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 637
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 637, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 637, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\"> 
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 639
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 639, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 639, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 645
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 645, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 645, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 647
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 647, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 647, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 653
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 653, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 653, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 655
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 655, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 655, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 661
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 661, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 661, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 663
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 663, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 663, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div role=\"tabpanel\" class=\"tab-pane\" id=\"LiveTv\">
                     <div id=\"livetv-slider\" class=\"owl-carousel\">
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 673
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 673, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 673, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 675
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 675, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 675, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 681
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 681, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 681, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 683
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 683, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 683, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 689
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 689, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 689, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 691
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 691, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 691, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                        <div class=\"podcost\">
                           <div class=\"image-slide\">
                              <img src=\"";
        // line 697
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 697, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 697, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                              <div class=\"shadow-slide\">
                                 <img src=\"";
        // line 699
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 699, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 699, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-md-12\">
               <h5 class=\"text-white mb-3 mt-5\">Trending 🕺 <span class=\"float-right\"><small><a href=\"#/\" class=\"play-color\">View all <i class=\"fas fa-chevron-right ml-2 \"></i></a></small></span></h5>
               <div id=\"trending-slider\" class=\"owl-carousel\">
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 716
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 716, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 716, $this->source)), "html", null, true);
        echo "/image/seletion1.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 718
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 718, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 718, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                        <span class=\"trending-count\">1</span>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 726
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 726, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 726, $this->source)), "html", null, true);
        echo "/image/seletion2.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 728
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 728, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 728, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                        <span class=\"trending-count\">2</span>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 736
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 736, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 736, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 738
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 738, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 738, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                        <span class=\"trending-count\">3</span>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 746
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 746, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 746, $this->source)), "html", null, true);
        echo "/image/seletion4.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 748
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 748, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 748, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                        <span class=\"trending-count\">4</span>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 756
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 756, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 756, $this->source)), "html", null, true);
        echo "/image/seletion3.jpg\">
                        <div class=\"shadow-slide\">
                           <img src=\"";
        // line 758
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 758, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 758, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                        </div>
                        <i class=\"fas fa-lock lock-img\"></i>
                        <span class=\"trending-count\">5</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-md-12\">
               <h5 class=\"text-white mb-3 mt-5\">MTN Shortz 📺<span class=\"float-right\">
                  <small>
                  <a href=\"#/\" class=\"play-color\">View all <i class=\"fas fa-chevron-right ml-2 \"></i></a></small></span>
               </h5>
               <div id=\"mtn-shortz-slider\" class=\"owl-carousel\">
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 778
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 778, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 778, $this->source)), "html", null, true);
        echo "/image/continue1.webp\">
                        <p class=\"p-2 bg-dark text-white\">Abangani</p>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 784
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 784, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 784, $this->source)), "html", null, true);
        echo "/image/continue2.jpg\">
                        <p class=\"p-2 bg-dark text-white\">Abangani</p>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 790
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 790, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 790, $this->source)), "html", null, true);
        echo "/image/continue3.webp\">
                        <p class=\"p-2 bg-dark text-white\">Abangani</p>
                     </div>
                  </div>
                  <div class=\"cotinue-streaming\">
                     <div class=\"image-slide\">
                        <img src=\"";
        // line 796
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 796, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 796, $this->source)), "html", null, true);
        echo "/image/continue4.webp\">
                        <p class=\"p-2 bg-dark text-white\">Abangani</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12\">
               <h5 class=\"text-white mb-3 mt-5\">Game zone 🏉</h5>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 813
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 813, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 813, $this->source)), "html", null, true);
        echo "/image/game2.jpg\" class=\"w-100 rounded\">
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 818
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 818, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 818, $this->source)), "html", null, true);
        echo "/image/game1.jpeg\" class=\"w-100 rounded\">
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 823
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 823, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 823, $this->source)), "html", null, true);
        echo "/image/game4.jpg\" class=\"w-100 rounded\">
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 828
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 828, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 828, $this->source)), "html", null, true);
        echo "/image/game3.jpg\" class=\"w-100 rounded\">
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 833
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 833, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 833, $this->source)), "html", null, true);
        echo "/image/game5.jpg\" class=\"w-100 rounded\">
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"game-zone\">
                  <img src=\"";
        // line 838
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 838, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 838, $this->source)), "html", null, true);
        echo "/image/game6.png\" class=\"w-100 rounded\">
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12\">
               <h5 class=\"text-white mb-3 mt-5\">Value added services</h5>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 852
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 852, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 852, $this->source)), "html", null, true);
        echo "/image/profile.jpg\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">CallerTunez</p>
                  </div>
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 860
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 860, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 860, $this->source)), "html", null, true);
        echo "/image/profile1.jpg\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">CallerFeel</p>
                  </div>
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 868
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 868, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 868, $this->source)), "html", null, true);
        echo "/image/profile2.webp\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">Lucky number</p>
                  </div>
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 876
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 876, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 876, $this->source)), "html", null, true);
        echo "/image/profile3.jpg\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">CallerTunez</p>
                  </div>
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 884
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 884, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 884, $this->source)), "html", null, true);
        echo "/image/profile4.webp\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">CallerTunez</p>
                  </div>
               </div>
            </div>
            <div class=\"col-lg-2 col-sm-4 col-6\">
               <div class=\"category-box\">
                  <img src=\"";
        // line 892
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 892, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 892, $this->source)), "html", null, true);
        echo "/image/profile5.jpg\" class=\"w-100\">
                  <div class=\"category-box-overlay\">
                     <p class=\"m-0\">Lucky number</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12\">
               <h5 class=\"text-white mb-3 mt-5\">Explore channels 💫</h5>
            </div>
         </div>
         <div class=\"row\">
            <div class=\"col-12\">
               <div id=\"channels-news-slider\" class=\"owl-carousel\">
               <div class=\"explore-chanel explore-chanel1 text-center\">
                  <img src=\"";
        // line 910
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 910, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 910, $this->source)), "html", null, true);
        echo "/image/liv.png\">
                  <p class=\"text-white m-0\">We liv to <br> Entertain</p>
                  <i class=\"fas fa-lock lock-img\"></i>
               </div>
           
               <div class=\"explore-chanel explore-chanel2 text-center\">
                  <img src=\"";
        // line 916
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 916, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 916, $this->source)), "html", null, true);
        echo "/image/netflix.png\">
                  <p class=\"text-white m-0\">See what’s <br>
                     next
                  </p>
               </div>
            
               <div class=\"explore-chanel explore-chanel3 text-center\">
                  <img src=\"";
        // line 923
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 923, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 923, $this->source)), "html", null, true);
        echo "/image/prime.png\">
                  <p class=\"text-white m-0\">A new era of <br>
                     originals
                  </p>
                  <i class=\"fas fa-lock lock-img\"></i>
               </div>
         
               <div class=\"explore-chanel explore-chanel4 text-center\">
                  <img src=\"";
        // line 931
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 931, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 931, $this->source)), "html", null, true);
        echo "/image/show.png\">
                  <p class=\"text-white m-0\">Everyone's  <br>
                     Anywhere TV
                  </p>
                  <i class=\"fas fa-lock lock-img\"></i>
               </div>
     
               <div class=\"explore-chanel explore-chanel5 text-center\">
                  <img src=\"";
        // line 939
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 939, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 939, $this->source)), "html", null, true);
        echo "/image/pulse.png\">
                  <p class=\"text-white m-0\">It’s go <br>
                     time
                  </p>
               </div>
            
               <div class=\"explore-chanel explore-chanel6 text-center\">
                  <img src=\"";
        // line 946
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 946, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 946, $this->source)), "html", null, true);
        echo "/image/bbc.png\">
                  <p class=\"text-white m-0\">Live the  <br>
                     story
                  </p>
               </div>

               <div class=\"explore-chanel explore-chanel7 text-center\">
                  <img src=\"";
        // line 953
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 953, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 953, $this->source)), "html", null, true);
        echo "/image/cnn.png\">
                  <p class=\"text-white m-0\">Live the  <br>
                     story
                  </p>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-md-12\">
               <h5 class=\"text-white mb-3 mt-5\">Trending news</h5>
               <div id=\"trending-news-slider\" class=\"owl-carousel\">
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 970
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 970, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 970, $this->source)), "html", null, true);
        echo "/image/news1.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 981
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 981, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 981, $this->source)), "html", null, true);
        echo "/image/news2.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 992
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 992, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 992, $this->source)), "html", null, true);
        echo "/image/news3.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1003
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1003, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1003, $this->source)), "html", null, true);
        echo "/image/news1.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1014
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1014, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1014, $this->source)), "html", null, true);
        echo "/image/news2.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1025
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1025, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1025, $this->source)), "html", null, true);
        echo "/image/news3.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1036
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1036, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1036, $this->source)), "html", null, true);
        echo "/image/news3.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1047
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1047, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1047, $this->source)), "html", null, true);
        echo "/image/news3.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
                  <div class=\"selection-for-you\">
                     <div class=\"trending-news-row\">
                        <div class=\"trending-news-col1\">
                           <img src=\"";
        // line 1058
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1058, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1058, $this->source)), "html", null, true);
        echo "/image/news3.png\" class=\"w-100\">
                        </div>
                        <div class=\"trending-news-col2\">
                           <h6 class=\"text-white m-0\">Nigerian govt to invest \$2.76 billion in Dangote refinery, \$1.5 billion</h6>
                           <p>Today | 2 mins</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=\"footer\">
         <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-6 col-sm-6 col-12\">
                  <h5 class=\"color-g-type\">Get in touch</h5>
                  <p class=\"text-white\">Get Inspiration, new arrivals and the latest offers to your inbox</p>
               </div>
               <div class=\"col-lg-4 col-sm-6 col-12\">
                  <div class=\"form-group\">
                     <label class=\"color-g-type m-0\">Sign up for emails</label>
                     <input type=\"text\" class=\"form-control footer-input\" value=\"xyz@gmail.com\">
                  </div>
               </div>
            </div>
            <hr class=\"footer-hr\">
            <div class=\"row\">
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>Quick links</h5>
                     <span class=\"footer-link-line\"></span>
                     <ul>
                        <li><a href=\"javascript:void(0)\">Recharge</a></li>
                        <li><a href=\"javascript:void(0)\">Share & Borrow</a></li>
                        <li><a href=\"javascript:void(0)\">Data Plans</a></li>
                        <li><a href=\"javascript:void(0)\">Roaming</a></li>
                        <li><a href=\"javascript:void(0)\">International Calls</a></li>
                        <li><a href=\"javascript:void(0)\">Business Plans</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>Entertainments</h5>
                     <span class=\"footer-link-line\"></span>
                     <ul>
                        <li><a href=\"javascript:void(0)\">Play</a></li>
                        <li><a href=\"javascript:void(0)\">MoMo</a></li>
                        <li><a href=\"javascript:void(0)\">Events</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>Account Services</h5>
                     <span class=\"footer-link-line\"></span>
                     <ul>
                        <li><a href=\"javascript:void(0)\">Paybill</a></li>
                        <li><a href=\"javascript:void(0)\">Switch to MTN</a></li>
                        <li><a href=\"javascript:void(0)\">NIN Update</a></li>
                        <li><a href=\"javascript:void(0)\">SIM Services</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>Help & Support</h5>
                     <span class=\"footer-link-line\"></span>
                     <ul>
                        <li><a href=\"javascript:void(0)\">Contact us</a></li>
                        <li><a href=\"javascript:void(0)\">FAQ'S</a></li>
                        <li><a href=\"javascript:void(0)\">Track your order</a></li>
                        <li><a href=\"javascript:void(0)\">Zigi</a></li>
                        <li><a href=\"javascript:void(0)\">Ask your community</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>MTN Nigeria</h5>
                     <span class=\"footer-link-line\"></span>
                     <ul>
                        <li><a href=\"javascript:void(0)\">Who we are</a></li>
                        <li><a href=\"javascript:void(0)\">MTN Business</a></li>
                        <li><a href=\"javascript:void(0)\">For Investors</a></li>
                        <li><a href=\"javascript:void(0)\">MTN Foundation</a></li>
                        <li><a href=\"javascript:void(0)\">Careers</a></li>
                        <li><a href=\"javascript:void(0)\">News Center</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-4 col-12\">
                  <div class=\"footer-links\">
                     <h5>Feedback</h5>
                     <span class=\"footer-link-line\"></span>
                     <p class=\"color-g-type\">Your comments help us improve our website and services</p>
                     <button class=\"btn btn-mtn btn-sm\">Feedback</button>
                  </div>
               </div>
            </div>
            <hr class=\"footer-hr\">
            <div class=\"row\">
               <div class=\"col-lg-6 col-sm-6 col-12\">
                  <div class=\"footer-copy-right\">
                     <img src=\"";
        // line 1163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1163, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1163, $this->source)), "html", null, true);
        echo "/image/mtn-logo.png\" class=\"mr-3\">
                     <p class=\"color-g-type m-0\"><i class=\"far fa-copyright mr-2\"></i>MTN Nigeria Communications PLC, All rights <br> reserved. Privacy Policy & Data Protection</p>
                  </div>
               </div>
               <div class=\"col-lg-6 col-sm-6 col-12\">
                  <div class=\"footer-social-media\">
                     <ul>
                        <li><a href=\"javascript:void(0)\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"fab fa-youtube\"></i></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"fab fa-instagram\"></i></a></li>
                        <li><a href=\"javascript:void(0)\"><i class=\"fab fa-linkedin\"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class=\"row mt-5\">
               <div class=\"col-lg-10 col-sm-8 col-12\">
                  <div class=\"footer-bottom-menu\">
                     <ul>
                        <li><a href=\"javascript:void(0)\">Privacy Policy & Data Protection</a></li>
                        <li>|</li>
                        <li><a href=\"javascript:void(0)\">Accessibility</a></li>
                        <li>|</li>
                        <li><a href=\"javascript:void(0)\">Sitemap</a></li>
                     </ul>
                  </div>
               </div>
               <div class=\"col-lg-2 col-sm-3 col-12\">
                  <div class=\"form-group\">
                     <select class=\"form-control bg-transparent radious-50\">
                        <option>Nigeria</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--   <div class=\"login-link-overlay shadow\">
         <p class=\"m-0 color-g-type\">Exclusive savings when you by SIM only or Socialmedia bundles. <a href=\"javascript:void(0)\" class=\"color-mtn font-weight-bold\">Login to get your discount</a></p>
         </div> -->
      <!-- <div class=\"chat-wp collapse\" id=\"chat-box-pop\">
         <div class=\"chart-block\"  data-toggle=\"collapse\" data-target=\"#chat-box-pop\"> <img src=\"";
        // line 1205
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1205, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1205, $this->source)), "html", null, true);
        echo "/image/chat-icon.png\" border=\"0\" alt=\"\"> </div>
         <div class=\"chart-close\"  data-toggle=\"collapse\" data-target=\"#chat-box-pop\"> <img src=\"";
        // line 1206
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1206, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1206, $this->source)), "html", null, true);
        echo "/image/chat-close.png\" border=\"0\" alt=\"\"> </div>
         <div class=\"page-content page-container popup-chart\" id=\"page-content\">
            <div class=\"row-not container-not d-flex justify-content-center\">
               <div class=\"chart-box-wd\">
                  <div class=\"card card-bordered\">
                     <div class=\"card-header\">
                        <h4 class=\"card-title\">  
                           <span class=\"top-chart-img\"> <img src=\"";
        // line 1213
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1213, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1213, $this->source)), "html", null, true);
        echo "/image/chat-zigi.png\" border=\"0\"> </span>
                           <strong>Ziggy</strong>
                        </h4>
                        <a class=\"btn btn-xs btn-secondary btn-minus\" href=\"javascript:void(0)\"  data-toggle=\"collapse\" data-target=\"#chat-box-pop\"></a>
                     </div>
                     <div class=\"ps-container ps-theme-default ps-active-y\" id=\"chat-content\" style=\"overflow-y: scroll !important; height:400px !important;\">
                        <div class=\"media media-meta-day\">Today <time datetime=\"2021\">4:07PM</time></div>
                        <div class=\"media media-chat\">
                           <div class=\"zigi-proson\">  <img src=\"";
        // line 1221
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1221, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1221, $this->source)), "html", null, true);
        echo "/image/zigi-cion3.png\" border=\"0\"> </div>
                           <div class=\"media-body\">
                              <div class=\"name-1\"> Ziggy</div>
                              <p>Hi there! Howr can I help you out there?</p>
                              <p>We will go on sunday? </p>
                              <p class=\"meta\"><time datetime=\"2018\">00:07</time></p>
                           </div>
                        </div>
                        <div class=\"media media-chat media-chat-reverse\">
                           <div class=\"media-body\">
                              <p>Raise new complaint</p>
                              <p>Check airtime blance</p>
                              <p>Check data blance</p>
                              <p>Recent transaction</p>
                              <p class=\"meta\"><time datetime=\"2018\">00:06</time></p>
                           </div>
                        </div>
                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\">
                           <div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div>
                        </div>
                        <div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 0px; right: 2px;\">
                           <div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 2px;\"></div>
                        </div>
                     </div>
                     <div class=\"publisher bt-1 border-light\">
                        <div class=\"text-type\"> Other? Type here </div>
                        <a class=\"publisher-btn\" href=\"javascript:void(0)\" data-abc=\"true\">  <img src=\"";
        // line 1247
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1247, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1247, $this->source)), "html", null, true);
        echo "/image/chat-attach.png\" border=\"0\"> </a> 
                        <a class=\"publisher-btn text-info\" href=\"javascript:void(0)\" data-abc=\"true\"> <img src=\"";
        // line 1248
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1248, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1248, $this->source)), "html", null, true);
        echo "/image/chat-photo.png\" border=\"0\"> </a> 
                        <input class=\"publisher-input\" type=\"text\" placeholder=\"Start typing here\"> 
                        <a class=\"publisher-btn sent-icon\" href=\"javascript:void(0)\" data-abc=\"true\"> <img src=\"";
        // line 1250
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 1250, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 1250, $this->source)), "html", null, true);
        echo "/image/chat-sent.png\" border=\"0\"> </a> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div> -->
   </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/mtn/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1701 => 1250,  1696 => 1248,  1692 => 1247,  1663 => 1221,  1652 => 1213,  1642 => 1206,  1638 => 1205,  1593 => 1163,  1485 => 1058,  1471 => 1047,  1457 => 1036,  1443 => 1025,  1429 => 1014,  1415 => 1003,  1401 => 992,  1387 => 981,  1373 => 970,  1353 => 953,  1343 => 946,  1333 => 939,  1322 => 931,  1311 => 923,  1301 => 916,  1292 => 910,  1271 => 892,  1260 => 884,  1249 => 876,  1238 => 868,  1227 => 860,  1216 => 852,  1199 => 838,  1191 => 833,  1183 => 828,  1175 => 823,  1167 => 818,  1159 => 813,  1139 => 796,  1130 => 790,  1121 => 784,  1112 => 778,  1089 => 758,  1084 => 756,  1073 => 748,  1068 => 746,  1057 => 738,  1052 => 736,  1041 => 728,  1036 => 726,  1025 => 718,  1020 => 716,  1000 => 699,  995 => 697,  986 => 691,  981 => 689,  972 => 683,  967 => 681,  958 => 675,  953 => 673,  940 => 663,  935 => 661,  926 => 655,  921 => 653,  912 => 647,  907 => 645,  898 => 639,  893 => 637,  880 => 627,  875 => 625,  866 => 619,  861 => 617,  852 => 611,  847 => 609,  838 => 603,  833 => 601,  803 => 574,  798 => 572,  789 => 566,  784 => 564,  775 => 558,  770 => 556,  761 => 550,  756 => 548,  743 => 538,  738 => 536,  729 => 530,  724 => 528,  715 => 522,  710 => 520,  701 => 514,  696 => 512,  668 => 487,  663 => 485,  653 => 478,  648 => 476,  638 => 469,  633 => 467,  623 => 460,  618 => 458,  597 => 440,  592 => 438,  580 => 429,  575 => 427,  563 => 418,  558 => 416,  546 => 407,  541 => 405,  505 => 372,  500 => 370,  491 => 364,  486 => 362,  477 => 356,  472 => 354,  463 => 348,  458 => 346,  449 => 340,  444 => 338,  435 => 332,  430 => 330,  382 => 285,  371 => 277,  360 => 269,  349 => 261,  338 => 253,  295 => 213,  284 => 205,  273 => 197,  262 => 189,  251 => 181,  208 => 141,  197 => 133,  186 => 125,  175 => 117,  164 => 109,  121 => 69,  111 => 62,  102 => 56,  74 => 31,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/mtn/templates/page.html.twig", "C:\\xampp 8.4\\htdocs\\drupal-9\\themes\\custom\\mtn\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

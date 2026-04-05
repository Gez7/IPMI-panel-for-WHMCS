<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* navigation/main.twig */
class __TwigTemplate_8d1695924e5e1c3e70cf141727cb9a3c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((($tmp =  !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 1, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div id=\"pma_navigation\" class=\"d-print-none\" data-config-navigation-width=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["config_navigation_width"]) || array_key_exists("config_navigation_width", $context) ? $context["config_navigation_width"] : (function () { throw new RuntimeError('Variable "config_navigation_width" does not exist.', 2, $this->source); })()), "html", null, true);
            yield "\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        ";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 8, $this->source); })()), "is_displayed", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "          <div id=\"pmalogo\">
            ";
                // line 10
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 10, $this->source); })()), "has_link", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "              <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["logo"] ?? null), "link", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 11, $this->source); })()), "link", [], "any", false, false, false, 11), "#")) : ("#")), "html", null, true);
                    yield "\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 11, $this->source); })()), "attributes", [], "any", false, false, false, 11);
                    yield ">
            ";
                }
                // line 13
                yield "            ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 13, $this->source); })()), "source", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "              <img id=\"imgpmalogo\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 14, $this->source); })()), "source", [], "any", false, false, false, 14), "html", null, true);
                    yield "\" alt=\"phpMyAdmin\">
            ";
                } else {
                    // line 16
                    yield "              <h1>phpMyAdmin</h1>
            ";
                }
                // line 18
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 18, $this->source); })()), "has_link", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 19
                    yield "              </a>
            ";
                }
                // line 21
                yield "          </div>
        ";
            }
            // line 23
            yield "
        <div id=\"navipanellinks\">
          <a href=\"";
            // line 25
            yield PhpMyAdmin\Url::getFromRoute("/");
            yield "\" class=\"disableAjax\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Home"), "html", null, true);
            yield "\">";
            // line 26
            yield PhpMyAdmin\Html\Generator::getImage("b_home", \_gettext("Home"));
            // line 27
            yield "</a>

          ";
            // line 29
            if (((isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 29, $this->source); })()) > 0)) {
                // line 30
                yield "            <a class=\"logout disableAjax\" href=\"";
                yield PhpMyAdmin\Url::getFromRoute("/logout");
                yield "\" title=\"";
                yield ((((isset($context["auth_type"]) || array_key_exists("auth_type", $context) ? $context["auth_type"] : (function () { throw new RuntimeError('Variable "auth_type" does not exist.', 30, $this->source); })()) == "config")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Empty session data"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log out"), "html", null, true)));
                yield "\">";
                // line 31
                yield PhpMyAdmin\Html\Generator::getImage("s_loggoff", ((((isset($context["auth_type"]) || array_key_exists("auth_type", $context) ? $context["auth_type"] : (function () { throw new RuntimeError('Variable "auth_type" does not exist.', 31, $this->source); })()) == "config")) ? (\_gettext("Empty session data")) : (\_gettext("Log out"))));
                // line 32
                yield "</a>
          ";
            }
            // line 34
            yield "
          <a href=\"";
            // line 35
            yield PhpMyAdmin\Html\MySQLDocumentation::getDocumentationLink("index");
            yield "\" class=\"disableAjax\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin documentation"), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 36
            yield PhpMyAdmin\Html\Generator::getImage("b_docs", \_gettext("phpMyAdmin documentation"));
            // line 37
            yield "</a>

          <a href=\"";
            // line 39
            yield PhpMyAdmin\Util::getDocuURL((isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 39, $this->source); })()));
            yield "\" class=\"disableAjax\" title=\"";
            yield (((($tmp = (isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MariaDB Documentation"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("MySQL Documentation"), "html", null, true)));
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">";
            // line 40
            yield PhpMyAdmin\Html\Generator::getImage("b_sqlhelp", (((($tmp = (isset($context["is_mariadb"]) || array_key_exists("is_mariadb", $context) ? $context["is_mariadb"] : (function () { throw new RuntimeError('Variable "is_mariadb" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (\_gettext("MariaDB Documentation")) : (\_gettext("MySQL Documentation"))));
            // line 41
            yield "</a>

          <a id=\"pma_navigation_settings_icon\"";
            // line 43
            yield (((($tmp =  !(isset($context["is_navigation_settings_enabled"]) || array_key_exists("is_navigation_settings_enabled", $context) ? $context["is_navigation_settings_enabled"] : (function () { throw new RuntimeError('Variable "is_navigation_settings_enabled" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" class=\"hide\"") : (""));
            yield " href=\"#\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Navigation panel settings"), "html", null, true);
            yield "\">";
            // line 44
            yield PhpMyAdmin\Html\Generator::getImage("s_cog", \_gettext("Navigation panel settings"));
            // line 45
            yield "</a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reload navigation panel"), "html", null, true);
            yield "\">";
            // line 48
            yield PhpMyAdmin\Html\Generator::getImage("s_reload", \_gettext("Reload navigation panel"));
            // line 49
            yield "</a>
        </div>

        ";
            // line 52
            if (((isset($context["is_servers_displayed"]) || array_key_exists("is_servers_displayed", $context) ? $context["is_servers_displayed"] : (function () { throw new RuntimeError('Variable "is_servers_displayed" does not exist.', 52, $this->source); })()) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["servers"]) || array_key_exists("servers", $context) ? $context["servers"] : (function () { throw new RuntimeError('Variable "servers" does not exist.', 52, $this->source); })())) > 1))) {
                // line 53
                yield "          <div id=\"serverChoice\">
            ";
                // line 54
                yield (isset($context["server_select"]) || array_key_exists("server_select", $context) ? $context["server_select"] : (function () { throw new RuntimeError('Variable "server_select" does not exist.', 54, $this->source); })());
                yield "
          </div>
        ";
            }
            // line 57
            yield "
        ";
            // line 58
            yield PhpMyAdmin\Html\Generator::getImage("ajax_clock_small", \_gettext("Loading…"), ["style" => "visibility: hidden; display:none", "class" => "throbber"]);
            // line 61
            yield "
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container";
            // line 63
            yield (((($tmp = (isset($context["is_synced"]) || array_key_exists("is_synced", $context) ? $context["is_synced"] : (function () { throw new RuntimeError('Variable "is_synced" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" synced") : (""));
            yield (((($tmp = (isset($context["is_highlighted"]) || array_key_exists("is_highlighted", $context) ? $context["is_highlighted"] : (function () { throw new RuntimeError('Variable "is_highlighted" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" highlight") : (""));
            yield (((($tmp = (isset($context["is_autoexpanded"]) || array_key_exists("is_autoexpanded", $context) ? $context["is_autoexpanded"] : (function () { throw new RuntimeError('Variable "is_autoexpanded" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" autoexpand") : (""));
            yield "\">
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($tmp =  !(isset($context["navigation_tree"]) || array_key_exists("navigation_tree", $context) ? $context["navigation_tree"] : (function () { throw new RuntimeError('Variable "navigation_tree" does not exist.', 66, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "  ";
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("An error has occurred while loading the navigation display"));
            yield "
";
        } else {
            // line 69
            yield "  ";
            yield (isset($context["navigation_tree"]) || array_key_exists("navigation_tree", $context) ? $context["navigation_tree"] : (function () { throw new RuntimeError('Variable "navigation_tree" does not exist.', 69, $this->source); })());
            yield "
";
        }
        // line 71
        yield "
";
        // line 72
        if ((($tmp =  !(isset($context["is_ajax"]) || array_key_exists("is_ajax", $context) ? $context["is_ajax"] : (function () { throw new RuntimeError('Variable "is_ajax" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "      </div>

      <div id=\"pma_navi_settings_container\">
        ";
            // line 76
            if ((($tmp = (isset($context["is_navigation_settings_enabled"]) || array_key_exists("is_navigation_settings_enabled", $context) ? $context["is_navigation_settings_enabled"] : (function () { throw new RuntimeError('Variable "is_navigation_settings_enabled" does not exist.', 76, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "          ";
                yield (isset($context["navigation_settings"]) || array_key_exists("navigation_settings", $context) ? $context["navigation_settings"] : (function () { throw new RuntimeError('Variable "navigation_settings" does not exist.', 77, $this->source); })());
                yield "
        ";
            }
            // line 79
            yield "      </div>
    </div>

    ";
            // line 82
            if ((($tmp = (isset($context["is_drag_drop_import_enabled"]) || array_key_exists("is_drag_drop_import_enabled", $context) ? $context["is_drag_drop_import_enabled"] : (function () { throw new RuntimeError('Variable "is_drag_drop_import_enabled" does not exist.', 82, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 83
                yield "      <div class=\"pma_drop_handler\">
        ";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drop files here"), "html", null, true);
                yield "
      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("SQL upload"), "html", null, true);
                yield "
          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    ";
            }
            // line 96
            yield "  </div>
  ";
            // line 97
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/unhide_nav_item.twig");
            yield "
  ";
            // line 98
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/create_view.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "navigation/main.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  265 => 98,  261 => 97,  258 => 96,  247 => 88,  240 => 84,  237 => 83,  235 => 82,  230 => 79,  224 => 77,  222 => 76,  217 => 73,  215 => 72,  212 => 71,  206 => 69,  200 => 67,  198 => 66,  195 => 65,  188 => 63,  184 => 61,  182 => 58,  179 => 57,  173 => 54,  170 => 53,  168 => 52,  163 => 49,  161 => 48,  158 => 47,  154 => 45,  152 => 44,  147 => 43,  143 => 41,  141 => 40,  136 => 39,  132 => 37,  130 => 36,  125 => 35,  122 => 34,  118 => 32,  116 => 31,  110 => 30,  108 => 29,  104 => 27,  102 => 26,  97 => 25,  93 => 23,  89 => 21,  85 => 19,  82 => 18,  78 => 16,  72 => 14,  69 => 13,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if not is_ajax %}
  <div id=\"pma_navigation\" class=\"d-print-none\" data-config-navigation-width=\"{{ config_navigation_width }}\">
    <div id=\"pma_navigation_resizer\"></div>
    <div id=\"pma_navigation_collapser\"></div>
    <div id=\"pma_navigation_content\">
      <div id=\"pma_navigation_header\">

        {% if logo.is_displayed %}
          <div id=\"pmalogo\">
            {% if logo.has_link %}
              <a href=\"{{ logo.link|default('#') }}\"{{ logo.attributes|raw }}>
            {% endif %}
            {% if logo.source is not empty %}
              <img id=\"imgpmalogo\" src=\"{{ logo.source }}\" alt=\"phpMyAdmin\">
            {% else %}
              <h1>phpMyAdmin</h1>
            {% endif %}
            {% if logo.has_link %}
              </a>
            {% endif %}
          </div>
        {% endif %}

        <div id=\"navipanellinks\">
          <a href=\"{{ url('/') }}\" class=\"disableAjax\" title=\"{{ t('Home') }}\">
            {{- get_image('b_home', t('Home')) -}}
          </a>

          {% if server > 0 %}
            <a class=\"logout disableAjax\" href=\"{{ url('/logout') }}\" title=\"{{ auth_type == 'config' ? t('Empty session data') : t('Log out') }}\">
              {{- get_image('s_loggoff', auth_type == 'config' ? t('Empty session data') : t('Log out')) -}}
            </a>
          {% endif %}

          <a href=\"{{ get_docu_link('index') }}\" class=\"disableAjax\" title=\"{{ t('phpMyAdmin documentation') }}\" target=\"_blank\" rel=\"noopener noreferrer\">
            {{- get_image('b_docs', t('phpMyAdmin documentation')) -}}
          </a>

          <a href=\"{{ get_docu_url(is_mariadb) }}\" class=\"disableAjax\" title=\"{{ is_mariadb ? t('MariaDB Documentation') : t('MySQL Documentation') }}\" target=\"_blank\" rel=\"noopener noreferrer\">
            {{- get_image('b_sqlhelp', is_mariadb ? t('MariaDB Documentation') : t('MySQL Documentation')) -}}
          </a>

          <a id=\"pma_navigation_settings_icon\"{{ not is_navigation_settings_enabled ? ' class=\"hide\"' }} href=\"#\" title=\"{{ t('Navigation panel settings') }}\">
            {{- get_image('s_cog', t('Navigation panel settings')) -}}
          </a>

          <a id=\"pma_navigation_reload\" href=\"#\" title=\"{{ t('Reload navigation panel') }}\">
            {{- get_image('s_reload', t('Reload navigation panel')) -}}
          </a>
        </div>

        {% if is_servers_displayed and servers|length > 1 %}
          <div id=\"serverChoice\">
            {{ server_select|raw }}
          </div>
        {% endif %}

        {{ get_image('ajax_clock_small', t('Loading…'), {
          'style': 'visibility: hidden; display:none',
          'class': 'throbber'
        }) }}
      </div>
      <div id=\"pma_navigation_tree\" class=\"list_container{{ is_synced ? ' synced' }}{{ is_highlighted ? ' highlight' }}{{ is_autoexpanded ? ' autoexpand' }}\">
{% endif %}

{% if not navigation_tree %}
  {{ t('An error has occurred while loading the navigation display')|error }}
{% else %}
  {{ navigation_tree|raw }}
{% endif %}

{% if not is_ajax %}
      </div>

      <div id=\"pma_navi_settings_container\">
        {% if is_navigation_settings_enabled %}
          {{ navigation_settings|raw }}
        {% endif %}
      </div>
    </div>

    {% if is_drag_drop_import_enabled %}
      <div class=\"pma_drop_handler\">
        {{ t('Drop files here') }}
      </div>
      <div class=\"pma_sql_import_status\">
        <h2>
          {{ t('SQL upload') }}
          ( <span class=\"pma_import_count\">0</span> )
          <span class=\"close\">x</span>
          <span class=\"minimize\">-</span>
        </h2>
        <div></div>
      </div>
    {% endif %}
  </div>
  {{ include('modals/unhide_nav_item.twig') }}
  {{ include('modals/create_view.twig') }}
{% endif %}
", "navigation/main.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/navigation/main.twig");
    }
}

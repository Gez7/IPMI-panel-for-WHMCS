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

/* server/replication/replica_configuration.twig */
class __TwigTemplate_43501ba10dce90f2bf4cf571e1023ab7 extends Template
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
        yield "<div class=\"card\">
  <div class=\"card-header\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica replication"), "html", null, true);
        yield "</div>
  <div class=\"card-body\">
  ";
        // line 4
        if ((($tmp = (isset($context["server_replica_multi_replication"]) || array_key_exists("server_replica_multi_replication", $context) ? $context["server_replica_multi_replication"] : (function () { throw new RuntimeError('Variable "server_replica_multi_replication" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Primary connection:"), "html", null, true);
            yield "
    <form method=\"get\" action=\"";
            // line 6
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\">
      ";
            // line 7
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 7, $this->source); })()));
            yield "
      <select name=\"primary_connection\">
        <option value=\"\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Default"), "html", null, true);
            yield "</option>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["server_replica_multi_replication"]) || array_key_exists("server_replica_multi_replication", $context) ? $context["server_replica_multi_replication"] : (function () { throw new RuntimeError('Variable "server_replica_multi_replication" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["server"]) {
                // line 11
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 11), "html", null, true);
                yield "\"";
                yield ((((isset($context["primary_connection"]) || array_key_exists("primary_connection", $context) ? $context["primary_connection"] : (function () { throw new RuntimeError('Variable "primary_connection" does not exist.', 11, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 11))) ? (" selected") : (""));
                yield ">
            ";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["server"], "Connection_name", [], "array", false, false, false, 12), "html", null, true);
                yield "
          </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['server'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "      </select>
      <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
    </form>
    <br>
    <br>
  ";
        }
        // line 21
        yield "
  ";
        // line 22
        if ((($tmp = (isset($context["server_replica_status"]) || array_key_exists("server_replica_status", $context) ? $context["server_replica_status"] : (function () { throw new RuntimeError('Variable "server_replica_status" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <div id=\"replica_configuration_gui\">
      ";
            // line 24
            if ((($tmp =  !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 24, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "        ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Replica SQL Thread not running!"));
                yield "
      ";
            }
            // line 27
            yield "      ";
            if ((($tmp =  !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "        ";
                yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Replica IO Thread not running!"));
                yield "
      ";
            }
            // line 30
            yield "
      <p>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server is configured as replica in a replication process. Would you like to:"), "html", null, true);
            yield "</p>
      <ul>
        <li>
          <a href=\"#replica_status_href\" id=\"replica_status_href\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("See replica status table"), "html", null, true);
            yield "</a>
          ";
            // line 35
            yield (isset($context["replica_status_table"]) || array_key_exists("replica_status_table", $context) ? $context["replica_status_table"] : (function () { throw new RuntimeError('Variable "replica_status_table" does not exist.', 35, $this->source); })());
            yield "
        </li>
        <li>
          <a href=\"#replica_control_href\" id=\"replica_control_href\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Control replica:"), "html", null, true);
            yield "</a>
          <div id=\"replica_control_gui\" class=\"hide\">
            <ul>
              <li>
                <a href=\"";
            // line 42
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["replica_control_full_link"]) || array_key_exists("replica_control_full_link", $context) ? $context["replica_control_full_link"] : (function () { throw new RuntimeError('Variable "replica_control_full_link" does not exist.', 42, $this->source); })());
            yield "\">
                  ";
            // line 43
            yield ((( !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 43, $this->source); })()) ||  !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 43, $this->source); })()))) ? ("Full start") : ("Full stop"));
            yield "
                </a>
              </li>
              <li>
                <a class=\"ajax\" id=\"reset_replica\" href=\"";
            // line 47
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["replica_control_reset_link"]) || array_key_exists("replica_control_reset_link", $context) ? $context["replica_control_reset_link"] : (function () { throw new RuntimeError('Variable "replica_control_reset_link" does not exist.', 47, $this->source); })());
            yield "\">
                  ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Reset replica"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <a href=\"";
            // line 52
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["replica_control_sql_link"]) || array_key_exists("replica_control_sql_link", $context) ? $context["replica_control_sql_link"] : (function () { throw new RuntimeError('Variable "replica_control_sql_link" does not exist.', 52, $this->source); })());
            yield "\">
                  ";
            // line 53
            if ((($tmp =  !(isset($context["replica_sql_running"]) || array_key_exists("replica_sql_running", $context) ? $context["replica_sql_running"] : (function () { throw new RuntimeError('Variable "replica_sql_running" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start SQL Thread only"), "html", null, true);
                yield "
                  ";
            } else {
                // line 56
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Stop SQL Thread only"), "html", null, true);
                yield "
                  ";
            }
            // line 58
            yield "                </a>
              </li>
              <li>
                <a href=\"";
            // line 61
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["replica_control_io_link"]) || array_key_exists("replica_control_io_link", $context) ? $context["replica_control_io_link"] : (function () { throw new RuntimeError('Variable "replica_control_io_link" does not exist.', 61, $this->source); })());
            yield "\">
                  ";
            // line 62
            if ((($tmp =  !(isset($context["replica_io_running"]) || array_key_exists("replica_io_running", $context) ? $context["replica_io_running"] : (function () { throw new RuntimeError('Variable "replica_io_running" does not exist.', 62, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Start IO Thread only"), "html", null, true);
                yield "
                  ";
            } else {
                // line 65
                yield "                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Stop IO Thread only"), "html", null, true);
                yield "
                  ";
            }
            // line 67
            yield "                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"#replica_errormanagement_href\" id=\"replica_errormanagement_href\">
            ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Error management:"), "html", null, true);
            yield "
          </a>
          <div id=\"replica_errormanagement_gui\" class=\"hide\">
            ";
            // line 77
            yield PhpMyAdmin\Twig\MessageExtension::getError(\_gettext("Skipping errors might lead into unsynchronized primary and replica!"));
            yield "
            <ul>
              <li>
                <a href=\"";
            // line 80
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["replica_skip_error_link"]) || array_key_exists("replica_skip_error_link", $context) ? $context["replica_skip_error_link"] : (function () { throw new RuntimeError('Variable "replica_skip_error_link" does not exist.', 80, $this->source); })());
            yield "\">
                  ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Skip current error"), "html", null, true);
            yield "
                </a>
              </li>
              <li>
                <form method=\"post\" action=\"";
            // line 85
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\">
                  ";
            // line 86
            yield PhpMyAdmin\Url::getHiddenInputs("", "");
            yield "
                  ";
            // line 87
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("Skip next %s errors."), "<input type=\"text\" name=\"sr_skip_errors_count\" value=\"1\" class=\"repl_gui_skip_err_cnt\">");
            yield "
                  <input class=\"btn btn-primary\" type=\"submit\" name=\"sr_replica_skip_error\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"sr_take_action\" value=\"1\">
                </form>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"";
            // line 96
            yield PhpMyAdmin\Url::getFromRoute("/server/replication");
            yield "\" data-post=\"";
            yield (isset($context["reconfigure_primary_link"]) || array_key_exists("reconfigure_primary_link", $context) ? $context["reconfigure_primary_link"] : (function () { throw new RuntimeError('Variable "reconfigure_primary_link" does not exist.', 96, $this->source); })());
            yield "\">
            ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change or reconfigure primary server"), "html", null, true);
            yield "
          </a>
        </li>
      </ul>
    </div>
  ";
        } elseif ((($tmp =  !        // line 102
(isset($context["has_replica_configure"]) || array_key_exists("has_replica_configure", $context) ? $context["has_replica_configure"] : (function () { throw new RuntimeError('Variable "has_replica_configure" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "    ";
            yield Twig\Extension\CoreExtension::sprintf(\_gettext("This server is not configured as replica in a replication process. Would you like to %sconfigure%s it?"), (((("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/server/replication")) . "\" data-post=\"") . PhpMyAdmin\Url::getCommon(Twig\Extension\CoreExtension::merge((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 103, $this->source); })()), ["replica_configure" => true, "replica_clear_screen" => true]))) . "\">"), "</a>");
            // line 106
            yield "
  ";
        }
        // line 108
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/replication/replica_configuration.twig";
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
        return array (  303 => 108,  299 => 106,  296 => 103,  294 => 102,  286 => 97,  280 => 96,  269 => 88,  265 => 87,  261 => 86,  257 => 85,  250 => 81,  244 => 80,  238 => 77,  232 => 74,  223 => 67,  217 => 65,  211 => 63,  209 => 62,  203 => 61,  198 => 58,  192 => 56,  186 => 54,  184 => 53,  178 => 52,  171 => 48,  165 => 47,  158 => 43,  152 => 42,  145 => 38,  139 => 35,  135 => 34,  129 => 31,  126 => 30,  120 => 28,  117 => 27,  111 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  93 => 16,  90 => 15,  81 => 12,  74 => 11,  70 => 10,  66 => 9,  61 => 7,  57 => 6,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">{{ t('Replica replication') }}</div>
  <div class=\"card-body\">
  {% if server_replica_multi_replication %}
    {{ t('Primary connection:') }}
    <form method=\"get\" action=\"{{ url('/server/replication') }}\">
      {{ get_hidden_inputs(url_params) }}
      <select name=\"primary_connection\">
        <option value=\"\">{{ t('Default') }}</option>
        {% for server in server_replica_multi_replication %}
          <option value=\"{{ server['Connection_name'] }}\"{{ primary_connection == server['Connection_name'] ? ' selected' }}>
            {{ server['Connection_name'] }}
          </option>
        {% endfor %}
      </select>
      <input id=\"goButton\" class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
    </form>
    <br>
    <br>
  {% endif %}

  {% if server_replica_status %}
    <div id=\"replica_configuration_gui\">
      {% if not replica_sql_running %}
        {{ t('Replica SQL Thread not running!')|error }}
      {% endif %}
      {% if not replica_io_running %}
        {{ t('Replica IO Thread not running!')|error }}
      {% endif %}

      <p>{{ t('Server is configured as replica in a replication process. Would you like to:') }}</p>
      <ul>
        <li>
          <a href=\"#replica_status_href\" id=\"replica_status_href\">{{ t('See replica status table') }}</a>
          {{ replica_status_table|raw }}
        </li>
        <li>
          <a href=\"#replica_control_href\" id=\"replica_control_href\">{{ t('Control replica:') }}</a>
          <div id=\"replica_control_gui\" class=\"hide\">
            <ul>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_full_link|raw }}\">
                  {{ not replica_io_running or not replica_sql_running ? 'Full start' : 'Full stop' }}
                </a>
              </li>
              <li>
                <a class=\"ajax\" id=\"reset_replica\" href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_reset_link|raw }}\">
                  {{ t('Reset replica') }}
                </a>
              </li>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_sql_link|raw }}\">
                  {% if not replica_sql_running %}
                    {{ t('Start SQL Thread only') }}
                  {% else %}
                    {{ t('Stop SQL Thread only') }}
                  {% endif %}
                </a>
              </li>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_control_io_link|raw }}\">
                  {% if not replica_io_running %}
                    {{ t('Start IO Thread only') }}
                  {% else %}
                    {{ t('Stop IO Thread only') }}
                  {% endif %}
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"#replica_errormanagement_href\" id=\"replica_errormanagement_href\">
            {{ t('Error management:') }}
          </a>
          <div id=\"replica_errormanagement_gui\" class=\"hide\">
            {{ t('Skipping errors might lead into unsynchronized primary and replica!')|error }}
            <ul>
              <li>
                <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ replica_skip_error_link|raw }}\">
                  {{ t('Skip current error') }}
                </a>
              </li>
              <li>
                <form method=\"post\" action=\"{{ url('/server/replication') }}\">
                  {{ get_hidden_inputs('', '') }}
                  {{ t('Skip next %s errors.')|format('<input type=\"text\" name=\"sr_skip_errors_count\" value=\"1\" class=\"repl_gui_skip_err_cnt\">')|raw }}
                  <input class=\"btn btn-primary\" type=\"submit\" name=\"sr_replica_skip_error\" value=\"{{ t('Go') }}\">
                  <input type=\"hidden\" name=\"sr_take_action\" value=\"1\">
                </form>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href=\"{{ url('/server/replication') }}\" data-post=\"{{ reconfigure_primary_link|raw }}\">
            {{ t('Change or reconfigure primary server') }}
          </a>
        </li>
      </ul>
    </div>
  {% elseif not has_replica_configure %}
    {{ t('This server is not configured as replica in a replication process. Would you like to %sconfigure%s it?')|format('<a href=\"' ~ url('/server/replication') ~ '\" data-post=\"' ~ get_common(url_params|merge({
      'replica_configure': true,
      'replica_clear_screen': true
    })) ~ '\">', '</a>')|raw }}
  {% endif %}
  </div>
</div>
", "server/replication/replica_configuration.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/replica_configuration.twig");
    }
}

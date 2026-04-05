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

/* login/form.twig */
class __TwigTemplate_ab38dcc987d55769b2be379e41d51a2c extends Template
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
        yield (isset($context["login_header"]) || array_key_exists("login_header", $context) ? $context["login_header"] : (function () { throw new RuntimeError('Variable "login_header" does not exist.', 1, $this->source); })());
        yield "

";
        // line 3
        if ((($tmp = (isset($context["is_demo"]) || array_key_exists("is_demo", $context) ? $context["is_demo"] : (function () { throw new RuntimeError('Variable "is_demo" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "  <div class=\"card mb-4\">
    <div class=\"card-header\">";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("phpMyAdmin Demo Server"), "html", null, true);
            yield "</div>
    <div class=\"card-body\">
      ";
            // line 7
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 8
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s."), "html", null, true);
                yield "
      ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 7
            yield Twig\Extension\CoreExtension::sprintf($_v0, (("<a href=\"" . PhpMyAdmin\Url::getFromRoute("/url", ["url" => "https://demo.phpmyadmin.net/"])) . "\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>"));
            // line 10
            yield "    </div>
  </div>
";
        }
        // line 13
        yield "
";
        // line 14
        yield (isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 14, $this->source); })());
        yield "

";
        // line 16
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["available_languages"]) || array_key_exists("available_languages", $context) ? $context["available_languages"] : (function () { throw new RuntimeError('Variable "available_languages" does not exist.', 16, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Language"), "html", null, true);
            yield "
          ";
            // line 22
            if ((\_gettext("Language") != "Language")) {
                // line 23
                yield "            ";
                // line 25
                yield "            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          ";
            }
            // line 27
            yield "        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"";
            // line 30
            yield PhpMyAdmin\Url::getFromRoute("/");
            yield "\" class=\"disableAjax\">
          ";
            // line 31
            yield PhpMyAdmin\Url::getHiddenInputs((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 31, $this->source); })()));
            yield "
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["available_languages"]) || array_key_exists("available_languages", $context) ? $context["available_languages"] : (function () { throw new RuntimeError('Variable "available_languages" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 34
                yield "              <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getCode", [], "method", false, false, false, 34)), "html", null, true);
                yield "\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["language"], "isActive", [], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" selected") : (""));
                yield ">";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "getName", [], "method", false, false, false, 35);
                // line 36
                yield "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "          </select>
        </form>
      </div>
    </div>
  </div>
";
        }
        // line 44
        yield "
<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"";
        // line 46
        yield (((($tmp =  !(isset($context["is_session_expired"]) || array_key_exists("is_session_expired", $context) ? $context["is_session_expired"] : (function () { throw new RuntimeError('Variable "is_session_expired" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("disableAjax hide ") : (""));
        yield "js-show\"";
        yield (((($tmp =  !(isset($context["has_autocomplete"]) || array_key_exists("has_autocomplete", $context) ? $context["has_autocomplete"] : (function () { throw new RuntimeError('Variable "has_autocomplete" does not exist.', 46, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" autocomplete=\"off\"") : (""));
        yield ">
  ";
        // line 48
        yield "  ";
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 48, $this->source); })()), "", "server");
        yield "
  <input type=\"hidden\" name=\"set_session\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["session_id"]) || array_key_exists("session_id", $context) ? $context["session_id"] : (function () { throw new RuntimeError('Variable "session_id" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "\">
  ";
        // line 50
        if ((($tmp = (isset($context["is_session_expired"]) || array_key_exists("is_session_expired", $context) ? $context["is_session_expired"] : (function () { throw new RuntimeError('Variable "is_session_expired" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  ";
        }
        // line 53
        yield "
  <div class=\"card mb-4\">
    <div class=\"card-header\">
      ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
        yield "
      ";
        // line 57
        yield PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("index", "", false, true);
        yield "
    </div>
    <div class=\"card-body\">
      ";
        // line 60
        if ((($tmp = (isset($context["is_arbitrary_server_allowed"]) || array_key_exists("is_arbitrary_server_allowed", $context) ? $context["is_arbitrary_server_allowed"] : (function () { throw new RuntimeError('Variable "is_arbitrary_server_allowed" does not exist.', 60, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You can enter hostname/IP address and port separated by space."), "html", null, true);
            yield "\">
            ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server:"), "html", null, true);
            yield "
          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["default_server"]) || array_key_exists("default_server", $context) ? $context["default_server"] : (function () { throw new RuntimeError('Variable "default_server" does not exist.', 66, $this->source); })()), "html", null, true);
            yield "\" class=\"form-control\" title=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("You can enter hostname/IP address and port separated by space."), "html", null, true);
            yield "\">
          </div>
        </div>
      ";
        }
        // line 71
        yield "
      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Username:"), "html", null, true);
        yield "
        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["default_user"]) || array_key_exists("default_user", $context) ? $context["default_user"] : (function () { throw new RuntimeError('Variable "default_user" does not exist.', 77, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\" autofocus>
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          ";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "
        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      ";
        // line 90
        if ((($tmp = (isset($context["has_servers"]) || array_key_exists("has_servers", $context) ? $context["has_servers"] : (function () { throw new RuntimeError('Variable "has_servers" does not exist.', 90, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Server choice:"), "html", null, true);
            yield "
          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"";
            // line 97
            if ((($tmp = (isset($context["is_arbitrary_server_allowed"]) || array_key_exists("is_arbitrary_server_allowed", $context) ? $context["is_arbitrary_server_allowed"] : (function () { throw new RuntimeError('Variable "is_arbitrary_server_allowed" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"";
            }
            yield ">
              ";
            // line 98
            yield (isset($context["server_options"]) || array_key_exists("server_options", $context) ? $context["server_options"] : (function () { throw new RuntimeError('Variable "server_options" does not exist.', 98, $this->source); })());
            yield "
            </select>
          </div>
        </div>
      ";
        } else {
            // line 103
            yield "        <input type=\"hidden\" name=\"server\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 103, $this->source); })()), "html", null, true);
            yield "\">
      ";
        }
        // line 105
        yield "    </div>
    <div class=\"card-footer\">
      ";
        // line 107
        if ((($tmp = (isset($context["has_captcha"]) || array_key_exists("has_captcha", $context) ? $context["has_captcha"] : (function () { throw new RuntimeError('Variable "has_captcha" does not exist.', 107, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_api"]) || array_key_exists("captcha_api", $context) ? $context["captcha_api"] : (function () { throw new RuntimeError('Variable "captcha_api" does not exist.', 108, $this->source); })()), "html", null, true);
            yield "?hl=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lang"]) || array_key_exists("lang", $context) ? $context["lang"] : (function () { throw new RuntimeError('Variable "lang" does not exist.', 108, $this->source); })()), "html", null, true);
            yield "\" async defer></script>
        ";
            // line 109
            if ((($tmp = (isset($context["use_captcha_checkbox"]) || array_key_exists("use_captcha_checkbox", $context) ? $context["use_captcha_checkbox"] : (function () { throw new RuntimeError('Variable "use_captcha_checkbox" does not exist.', 109, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_req"]) || array_key_exists("captcha_req", $context) ? $context["captcha_req"] : (function () { throw new RuntimeError('Variable "captcha_req" does not exist.', 112, $this->source); })()), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_key"]) || array_key_exists("captcha_key", $context) ? $context["captcha_key"] : (function () { throw new RuntimeError('Variable "captcha_key" does not exist.', 112, $this->source); })()), "html", null, true);
                yield "\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
                yield "\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        ";
            } else {
                // line 119
                yield "          <input class=\"btn btn-primary ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_req"]) || array_key_exists("captcha_req", $context) ? $context["captcha_req"] : (function () { throw new RuntimeError('Variable "captcha_req" does not exist.', 119, $this->source); })()), "html", null, true);
                yield "\" data-sitekey=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["captcha_key"]) || array_key_exists("captcha_key", $context) ? $context["captcha_key"] : (function () { throw new RuntimeError('Variable "captcha_key" does not exist.', 119, $this->source); })()), "html", null, true);
                yield "\" data-callback=\"recaptchaCallback\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
                yield "\" type=\"submit\" id=\"input_go\">
        ";
            }
            // line 121
            yield "      ";
        } else {
            // line 122
            yield "        <input class=\"btn btn-primary\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Log in"), "html", null, true);
            yield "\" type=\"submit\" id=\"input_go\">
      ";
        }
        // line 124
        yield "    </div>
  </div>
</form>

";
        // line 128
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 128, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 129
            yield "  <div id=\"pma_errors\">
    ";
            // line 130
            yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 130, $this->source); })());
            yield "
  </div>
  </div>
  </div>
";
        }
        // line 135
        yield "
";
        // line 136
        yield (isset($context["login_footer"]) || array_key_exists("login_footer", $context) ? $context["login_footer"] : (function () { throw new RuntimeError('Variable "login_footer" does not exist.', 136, $this->source); })());
        yield "

";
        // line 138
        yield (isset($context["config_footer"]) || array_key_exists("config_footer", $context) ? $context["config_footer"] : (function () { throw new RuntimeError('Variable "config_footer" does not exist.', 138, $this->source); })());
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "login/form.twig";
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
        return array (  348 => 138,  343 => 136,  340 => 135,  332 => 130,  329 => 129,  327 => 128,  321 => 124,  315 => 122,  312 => 121,  302 => 119,  295 => 115,  287 => 112,  283 => 110,  281 => 109,  274 => 108,  272 => 107,  268 => 105,  262 => 103,  254 => 98,  248 => 97,  242 => 93,  238 => 91,  236 => 90,  226 => 83,  217 => 77,  211 => 74,  206 => 71,  199 => 67,  196 => 66,  190 => 63,  186 => 62,  183 => 61,  181 => 60,  175 => 57,  171 => 56,  166 => 53,  162 => 51,  160 => 50,  156 => 49,  151 => 48,  145 => 46,  142 => 44,  134 => 38,  127 => 36,  125 => 35,  119 => 34,  115 => 33,  110 => 31,  106 => 30,  101 => 27,  97 => 25,  95 => 23,  93 => 22,  89 => 21,  83 => 17,  81 => 16,  76 => 14,  73 => 13,  68 => 10,  66 => 7,  59 => 8,  57 => 7,  52 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ login_header|raw }}

{% if is_demo %}
  <div class=\"card mb-4\">
    <div class=\"card-header\">{{ t('phpMyAdmin Demo Server') }}</div>
    <div class=\"card-body\">
      {% apply format('<a href=\"' ~ url('/url', {'url': 'https://demo.phpmyadmin.net/'}) ~ '\" target=\"_blank\" rel=\"noopener noreferrer\">demo.phpmyadmin.net</a>')|raw %}
        {{ t('You are using the demo server. You can do anything here, but please do not change root, debian-sys-maint and pma users. More information is available at %s.') }}
      {% endapply %}
    </div>
  </div>
{% endif %}

{{ error_messages|raw }}

{% if available_languages is not empty %}
  <div class='hide js-show'>
    <div class=\"card mb-4\">
      <div class=\"card-header\">
        <span id=\"languageSelectLabel\">
          {{ t('Language') }}
          {% if t('Language') != 'Language' %}
            {# For non-English, display \"Language\" with emphasis because it's not a proper word
               in the current language; we show it to help people recognize the dialog #}
            <i lang=\"en\" dir=\"ltr\">(Language)</i>
          {% endif %}
        </span>
      </div>
      <div class=\"card-body\">
        <form method=\"get\" action=\"{{ url('/') }}\" class=\"disableAjax\">
          {{ get_hidden_inputs(form_params) }}
          <select name=\"lang\" class=\"form-select autosubmit\" lang=\"en\" dir=\"ltr\" id=\"languageSelect\" aria-labelledby=\"languageSelectLabel\">
            {% for language in available_languages %}
              <option value=\"{{ language.getCode()|lower }}\"{{ language.isActive() ? ' selected' }}>
                {{- language.getName()|raw -}}
              </option>
            {% endfor %}
          </select>
        </form>
      </div>
    </div>
  </div>
{% endif %}

<form method=\"post\" id=\"login_form\" action=\"index.php?route=/\" name=\"login_form\" class=\"
  {{- not is_session_expired ? 'disableAjax hide ' }}js-show\"{{ not has_autocomplete ? ' autocomplete=\"off\"' }}>
  {# Do not generate a \"server\" hidden field as we want the \"server\" drop-down to have priority. #}
  {{ get_hidden_inputs(form_params, '', 'server') }}
  <input type=\"hidden\" name=\"set_session\" value=\"{{ session_id }}\">
  {% if is_session_expired %}
    <input type=\"hidden\" name=\"session_timedout\" value=\"1\">
  {% endif %}

  <div class=\"card mb-4\">
    <div class=\"card-header\">
      {{ t('Log in') }}
      {{ show_docu('index', '', false, true) }}
    </div>
    <div class=\"card-body\">
      {% if is_arbitrary_server_allowed %}
        <div class=\"row mb-3\">
          <label for=\"serverNameInput\" class=\"col-sm-4 col-form-label\" title=\"{{ t('You can enter hostname/IP address and port separated by space.') }}\">
            {{ t('Server:') }}
          </label>
          <div class=\"col-sm-8\">
            <input type=\"text\" name=\"pma_servername\" id=\"serverNameInput\" value=\"{{ default_server }}\" class=\"form-control\" title=\"
              {{- t('You can enter hostname/IP address and port separated by space.') }}\">
          </div>
        </div>
      {% endif %}

      <div class=\"row mb-3\">
        <label for=\"input_username\" class=\"col-sm-4 col-form-label\">
          {{ t('Username:') }}
        </label>
        <div class=\"col-sm-8\">
          <input type=\"text\" name=\"pma_username\" id=\"input_username\" value=\"{{ default_user }}\" class=\"form-control\" autocomplete=\"username\" spellcheck=\"false\" autofocus>
        </div>
      </div>

      <div class=\"row\">
        <label for=\"input_password\" class=\"col-sm-4 col-form-label\">
          {{ t('Password:') }}
        </label>
        <div class=\"col-sm-8\">
          <input type=\"password\" name=\"pma_password\" id=\"input_password\" value=\"\" class=\"form-control\" autocomplete=\"current-password\" spellcheck=\"false\">
        </div>
      </div>

      {% if has_servers %}
        <div class=\"row mt-3\">
          <label for=\"select_server\" class=\"col-sm-4 col-form-label\">
            {{ t('Server choice:') }}
          </label>
          <div class=\"col-sm-8\">
            <select name=\"server\" id=\"select_server\" class=\"form-select\"
              {%- if is_arbitrary_server_allowed %} onchange=\"document.forms['login_form'].elements['pma_servername'].value = ''\"{% endif %}>
              {{ server_options|raw }}
            </select>
          </div>
        </div>
      {% else %}
        <input type=\"hidden\" name=\"server\" value=\"{{ server }}\">
      {% endif %}
    </div>
    <div class=\"card-footer\">
      {% if has_captcha %}
        <script src=\"{{ captcha_api }}?hl={{ lang }}\" async defer></script>
        {% if use_captcha_checkbox %}
          <div class=\"row g-3\">
            <div class=\"col\">
              <div class=\"{{ captcha_req }}\" data-sitekey=\"{{ captcha_key }}\"></div>
            </div>
            <div class=\"col align-self-center text-end\">
              <input class=\"btn btn-primary\" value=\"{{ t('Log in') }}\" type=\"submit\" id=\"input_go\">
            </div>
          </div>
        {% else %}
          <input class=\"btn btn-primary {{ captcha_req }}\" data-sitekey=\"{{ captcha_key }}\" data-callback=\"recaptchaCallback\" value=\"{{ t('Log in') }}\" type=\"submit\" id=\"input_go\">
        {% endif %}
      {% else %}
        <input class=\"btn btn-primary\" value=\"{{ t('Log in') }}\" type=\"submit\" id=\"input_go\">
      {% endif %}
    </div>
  </div>
</form>

{% if errors is not empty %}
  <div id=\"pma_errors\">
    {{ errors|raw }}
  </div>
  </div>
  </div>
{% endif %}

{{ login_footer|raw }}

{{ config_footer|raw }}
", "login/form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/login/form.twig");
    }
}

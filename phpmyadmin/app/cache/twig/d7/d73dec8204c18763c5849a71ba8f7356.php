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

/* server/privileges/change_password.twig */
class __TwigTemplate_59075cbd8fca95330e6e88e39d69efed extends Template
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
        yield "<form method=\"post\" id=\"change_password_form\" action=\"";
        // line 2
        yield (((($tmp = (isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Url::getFromRoute("/server/privileges")) : (PhpMyAdmin\Url::getFromRoute("/user-password")));
        yield "\" name=\"chgPassword\" class=\"";
        yield (((($tmp = (isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("submenu-item") : (""));
        yield "\" autocomplete=\"off\" data-allow-no-password=\"";
        yield (((($tmp = (isset($context["allow_no_password"]) || array_key_exists("allow_no_password", $context) ? $context["allow_no_password"] : (function () { throw new RuntimeError('Variable "allow_no_password" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
        yield "\">
  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  ";
        // line 4
        if ((($tmp = (isset($context["is_privileges"]) || array_key_exists("is_privileges", $context) ? $context["is_privileges"] : (function () { throw new RuntimeError('Variable "is_privileges" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "    <input type=\"hidden\" name=\"username\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 5, $this->source); })()), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"hostname\" value=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname"]) || array_key_exists("hostname", $context) ? $context["hostname"] : (function () { throw new RuntimeError('Variable "hostname" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "\">
  ";
        }
        // line 8
        yield "
  <div class=\"card mb-3\" id=\"fieldset_change_password\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change password"), "html", null, true);
        yield "\">
      ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Change password"), "html", null, true);
        yield "
    </div>
    <div class=\"card-body\">
    <table class=\"table-borderless\" style=\"background: transparent;\">
      <tr class=\"mb-4\">
        <td colspan=\"3\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("No Password"), "html", null, true);
        yield "</label>
        </td>
      </tr>
      <tr class=\"align-middle mb-4\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked>
          <label for=\"nopass_0\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "&nbsp;</label>
        </td>
        <td>
          <div class=\"row\">
            <span class=\"d-flex align-items-center col-4\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Enter:"), "html", null, true);
        yield "</span>
            <input type=\"password\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
          <div class=\"row mt-2\">
            <span class=\"d-flex align-items-center col-4\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Re-type:"), "html", null, true);
        yield "</span>
            <input type=\"password\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
        </td>
        <td class=\"col-2\">
          <div>
            <span>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Password strength", "Strength:"), "html", null, true);
        yield "</span>
            <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          </div>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
        </td>
      </tr>

      ";
        // line 45
        if (( !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 45, $this->source); })()) || ((isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 45, $this->source); })()) && (isset($context["has_more_auth_plugins"]) || array_key_exists("has_more_auth_plugins", $context) ? $context["has_more_auth_plugins"] : (function () { throw new RuntimeError('Variable "has_more_auth_plugins" does not exist.', 45, $this->source); })())))) {
            // line 46
            yield "        <tr class=\"align-middle mb-4\">
          <td>
            <label for=\"select_authentication_plugin_cp\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password Hashing:"), "html", null, true);
            yield "</label>
          </td>
          <td colspan=\"2\">
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\" class=\"col-8\">
              ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["active_auth_plugins"]) || array_key_exists("active_auth_plugins", $context) ? $context["active_auth_plugins"] : (function () { throw new RuntimeError('Variable "active_auth_plugins" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin_description"]) {
                // line 53
                yield "                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_name"], "html", null, true);
                yield "\"";
                yield ((($context["plugin_name"] == (isset($context["orig_auth_plugin"]) || array_key_exists("orig_auth_plugin", $context) ? $context["orig_auth_plugin"] : (function () { throw new RuntimeError('Variable "orig_auth_plugin" does not exist.', 53, $this->source); })()))) ? (" selected") : (""));
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["plugin_description"], "html", null, true);
                yield "</option>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['plugin_name'], $context['plugin_description'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "            </select>
          </td>
        </tr>
      ";
        }
        // line 59
        yield "
      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    ";
        // line 63
        if (((isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 63, $this->source); })()) && (isset($context["has_more_auth_plugins"]) || array_key_exists("has_more_auth_plugins", $context) ? $context["has_more_auth_plugins"] : (function () { throw new RuntimeError('Variable "has_more_auth_plugins" does not exist.', 63, $this->source); })()))) {
            // line 64
            yield "      <div";
            yield ((((isset($context["orig_auth_plugin"]) || array_key_exists("orig_auth_plugin", $context) ? $context["orig_auth_plugin"] : (function () { throw new RuntimeError('Variable "orig_auth_plugin" does not exist.', 64, $this->source); })()) != "sha256_password")) ? (" class=\"hide\"") : (""));
            yield " id=\"ssl_reqd_warning_cp\">
        ";
            // line 65
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 66
                yield "          ";
                yield \_gettext("This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.");
                yield "
          ";
                // line 67
                yield PhpMyAdmin\Html\MySQLDocumentation::show("sha256-authentication-plugin");
                yield "
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 65
            yield PhpMyAdmin\Twig\MessageExtension::getNotice($_v0);
            // line 69
            yield "      </div>
    ";
        }
        // line 71
        yield "    </div>

  </div>

  <div id=\"fieldset_change_password_footer\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
        yield "\">
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/change_password.twig";
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
        return array (  204 => 77,  196 => 71,  192 => 69,  190 => 65,  184 => 67,  179 => 66,  177 => 65,  172 => 64,  170 => 63,  164 => 59,  158 => 55,  145 => 53,  141 => 52,  134 => 48,  130 => 46,  128 => 45,  118 => 38,  109 => 32,  102 => 28,  95 => 24,  86 => 18,  76 => 11,  72 => 10,  68 => 8,  63 => 6,  58 => 5,  56 => 4,  52 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" id=\"change_password_form\" action=\"
  {{- is_privileges ? url('/server/privileges') : url('/user-password') }}\" name=\"chgPassword\" class=\"{{ is_privileges ? 'submenu-item' }}\" autocomplete=\"off\" data-allow-no-password=\"{{ allow_no_password ? 1 : 0 }}\">
  {{ get_hidden_inputs() }}
  {% if is_privileges %}
    <input type=\"hidden\" name=\"username\" value=\"{{ username }}\">
    <input type=\"hidden\" name=\"hostname\" value=\"{{ hostname }}\">
  {% endif %}

  <div class=\"card mb-3\" id=\"fieldset_change_password\">
    <div class=\"card-header js-submenu-label\" data-submenu-label=\"{{ t('Change password') }}\">
      {{ t('Change password') }}
    </div>
    <div class=\"card-body\">
    <table class=\"table-borderless\" style=\"background: transparent;\">
      <tr class=\"mb-4\">
        <td colspan=\"3\">
          <input type=\"radio\" name=\"nopass\" value=\"1\" id=\"nopass_1\">
          <label for=\"nopass_1\">{{ t('No Password') }}</label>
        </td>
      </tr>
      <tr class=\"align-middle mb-4\">
        <td>
          <input type=\"radio\" name=\"nopass\" value=\"0\" id=\"nopass_0\" checked>
          <label for=\"nopass_0\">{{ t('Password:') }}&nbsp;</label>
        </td>
        <td>
          <div class=\"row\">
            <span class=\"d-flex align-items-center col-4\">{{ t('Enter:') }}</span>
            <input type=\"password\" name=\"pma_pw\" id=\"text_pma_change_pw\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
          <div class=\"row mt-2\">
            <span class=\"d-flex align-items-center col-4\">{{ t('Re-type:') }}</span>
            <input type=\"password\" name=\"pma_pw2\" id=\"text_pma_change_pw2\" size=\"10\" class=\"textfield col-6\" spellcheck=\"false\" autocomplete=\"new-password\">
          </div>
        </td>
        <td class=\"col-2\">
          <div>
            <span>{{ t('Strength:', context = 'Password strength') }}</span>
            <meter max=\"4\" id=\"change_password_strength_meter\" name=\"pw_meter\"></meter>
          </div>
          <span id=\"change_password_strength\" name=\"pw_strength\"></span>
        </td>
      </tr>

      {% if not is_new or (is_new and has_more_auth_plugins) %}
        <tr class=\"align-middle mb-4\">
          <td>
            <label for=\"select_authentication_plugin_cp\">{{ t('Password Hashing:') }}</label>
          </td>
          <td colspan=\"2\">
            <select name=\"authentication_plugin\" id=\"select_authentication_plugin_cp\" class=\"col-8\">
              {% for plugin_name, plugin_description in active_auth_plugins %}
                <option value=\"{{ plugin_name }}\"{{ plugin_name == orig_auth_plugin ? ' selected' }}>{{ plugin_description }}</option>
              {% endfor %}
            </select>
          </td>
        </tr>
      {% endif %}

      <tr id=\"tr_element_before_generate_password\"></tr>
    </table>

    {% if is_new and has_more_auth_plugins %}
      <div{{ orig_auth_plugin != 'sha256_password' ? ' class=\"hide\"' }} id=\"ssl_reqd_warning_cp\">
        {% apply notice %}
          {{ t(\"This method requires using an '<em>SSL connection</em>' or an '<em>unencrypted connection that encrypts the password using RSA</em>'; while connecting to the server.\")|raw }}
          {{ show_mysql_docu('sha256-authentication-plugin') }}
        {% endapply %}
      </div>
    {% endif %}
    </div>

  </div>

  <div id=\"fieldset_change_password_footer\">
    <input type=\"hidden\" name=\"change_pw\" value=\"1\">
    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Go') }}\">
  </div>
</form>
", "server/privileges/change_password.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/change_password.twig");
    }
}

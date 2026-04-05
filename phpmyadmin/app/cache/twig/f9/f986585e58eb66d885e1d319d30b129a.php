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

/* server/replication/change_primary.twig */
class __TwigTemplate_368cb6f84526257428c3e9b96e6ffc5f extends Template
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
        yield "<form method=\"post\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/server/replication");
        yield "\" class=\"card\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs("", "");
        yield "
  <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
  <input type=\"hidden\" name=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["submit_name"]) || array_key_exists("submit_name", $context) ? $context["submit_name"] : (function () { throw new RuntimeError('Variable "submit_name" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\" value=\"1\">

  <div class=\"card-header\">
    ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Replica configuration - Change or reconfigure primary server"), "html", null, true);
        yield "
  </div>

  <div class=\"card-body\" id=\"fieldset_add_user_login\">
    <p>
      ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Make sure you have a unique server-id in your configuration file (my.cnf). If not, please add the following line into [mysqld] section:"), "html", null, true);
        yield "
    </p>
    <pre>server-id=";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["server_id"]) || array_key_exists("server_id", $context) ? $context["server_id"] : (function () { throw new RuntimeError('Variable "server_id" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</pre>

    <div class=\"item\">
      <label for=\"text_username\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name:"), "html", null, true);
        yield "</label>
      <input id=\"text_username\" name=\"username\" type=\"text\" maxlength=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["username_length"]) || array_key_exists("username_length", $context) ? $context["username_length"] : (function () { throw new RuntimeError('Variable "username_length" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User name"), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_pma_pw\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password:"), "html", null, true);
        yield "</label>
      <input id=\"text_pma_pw\" name=\"pma_pw\" type=\"password\" spellcheck=\"false\" title=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Password"), "html", null, true);
        yield "\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_hostname\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Host:"), "html", null, true);
        yield "</label>
      <input id=\"text_hostname\" name=\"hostname\" type=\"text\" maxlength=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hostname_length"]) || array_key_exists("hostname_length", $context) ? $context["hostname_length"] : (function () { throw new RuntimeError('Variable "hostname_length" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\" value=\"\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_port\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Port:"), "html", null, true);
        yield "</label>
      <input id=\"text_port\" name=\"text_port\" type=\"number\" maxlength=\"6\" value=\"3306\" required>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"confreplica_submit\" value=\"";
        // line 35
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
        return "server/replication/change_primary.twig";
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
        return array (  118 => 35,  109 => 29,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  81 => 18,  77 => 17,  71 => 14,  66 => 12,  58 => 7,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form method=\"post\" action=\"{{ url('/server/replication') }}\" class=\"card\">
  {{ get_hidden_inputs('', '') }}
  <input type=\"hidden\" name=\"sr_take_action\" value=\"true\">
  <input type=\"hidden\" name=\"{{ submit_name }}\" value=\"1\">

  <div class=\"card-header\">
    {{ t('Replica configuration - Change or reconfigure primary server') }}
  </div>

  <div class=\"card-body\" id=\"fieldset_add_user_login\">
    <p>
      {{ t('Make sure you have a unique server-id in your configuration file (my.cnf). If not, please add the following line into [mysqld] section:') }}
    </p>
    <pre>server-id={{ server_id }}</pre>

    <div class=\"item\">
      <label for=\"text_username\">{{ t('User name:') }}</label>
      <input id=\"text_username\" name=\"username\" type=\"text\" maxlength=\"{{ username_length }}\" title=\"{{ t('User name') }}\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_pma_pw\">{{ t('Password:') }}</label>
      <input id=\"text_pma_pw\" name=\"pma_pw\" type=\"password\" spellcheck=\"false\" title=\"{{ t('Password') }}\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_hostname\">{{ t('Host:') }}</label>
      <input id=\"text_hostname\" name=\"hostname\" type=\"text\" maxlength=\"{{ hostname_length }}\" value=\"\" required>
    </div>
    <div class=\"item\">
      <label for=\"text_port\">{{ t('Port:') }}</label>
      <input id=\"text_port\" name=\"text_port\" type=\"number\" maxlength=\"6\" value=\"3306\" required>
    </div>
  </div>

  <div class=\"card-footer\">
    <input class=\"btn btn-primary\" type=\"submit\" id=\"confreplica_submit\" value=\"{{ t('Go') }}\">
  </div>
</form>
", "server/replication/change_primary.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/replication/change_primary.twig");
    }
}

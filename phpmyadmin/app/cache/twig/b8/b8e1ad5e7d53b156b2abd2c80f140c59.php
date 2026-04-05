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

/* server/privileges/user_overview.twig */
class __TwigTemplate_c9b863a4f60f4a297e51f81efbd1ab3c extends Template
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
        yield "<div class=\"row\">
  <div class=\"col-12\">
    <h2>";
        // line 4
        yield PhpMyAdmin\Html\Generator::getIcon("b_usrlist");
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("User accounts overview"), "html", null, true);
        yield "
    </h2>
  </div>
</div>";
        // line 10
        yield (isset($context["error_messages"]) || array_key_exists("error_messages", $context) ? $context["error_messages"] : (function () { throw new RuntimeError('Variable "error_messages" does not exist.', 10, $this->source); })());
        // line 12
        yield (isset($context["empty_user_notice"]) || array_key_exists("empty_user_notice", $context) ? $context["empty_user_notice"] : (function () { throw new RuntimeError('Variable "empty_user_notice" does not exist.', 12, $this->source); })());
        // line 14
        yield (isset($context["initials"]) || array_key_exists("initials", $context) ? $context["initials"] : (function () { throw new RuntimeError('Variable "initials" does not exist.', 14, $this->source); })());
        // line 16
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["users_overview"]) || array_key_exists("users_overview", $context) ? $context["users_overview"] : (function () { throw new RuntimeError('Variable "users_overview" does not exist.', 16, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield (isset($context["users_overview"]) || array_key_exists("users_overview", $context) ? $context["users_overview"] : (function () { throw new RuntimeError('Variable "users_overview" does not exist.', 17, $this->source); })());
        } elseif ((($tmp =         // line 18
(isset($context["is_createuser"]) || array_key_exists("is_createuser", $context) ? $context["is_createuser"] : (function () { throw new RuntimeError('Variable "is_createuser" does not exist.', 18, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <div class=\"card\">
    <div class=\"card-header\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Create new user", "New"), "html", null, true);
            yield "</div>
    <div class=\"card-body\" id=\"fieldset_add_user\">
      <a id=\"add_user_anchor\" href=\"";
            // line 22
            yield PhpMyAdmin\Url::getFromRoute("/server/privileges", ["adduser" => true]);
            yield "\">";
            // line 23
            yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
            // line 24
            yield "</a>
    </div>
  </div>
";
        }
        // line 29
        yield (isset($context["flush_notice"]) || array_key_exists("flush_notice", $context) ? $context["flush_notice"] : (function () { throw new RuntimeError('Variable "flush_notice" does not exist.', 29, $this->source); })());
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/user_overview.twig";
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
        return array (  85 => 29,  79 => 24,  77 => 23,  74 => 22,  69 => 20,  66 => 19,  64 => 18,  62 => 17,  60 => 16,  58 => 14,  56 => 12,  54 => 10,  48 => 5,  46 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
  <div class=\"col-12\">
    <h2>
      {{- get_icon('b_usrlist') -}}
      {{ t('User accounts overview') }}
    </h2>
  </div>
</div>

{{- error_messages|raw -}}

{{- empty_user_notice|raw -}}

{{- initials|raw -}}

{% if users_overview is not empty %}
  {{- users_overview|raw -}}
{% elseif is_createuser %}
  <div class=\"card\">
    <div class=\"card-header\">{{ t('New', context = 'Create new user') }}</div>
    <div class=\"card-body\" id=\"fieldset_add_user\">
      <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', {'adduser': true}) }}\">
        {{- get_icon('b_usradd', t('Add user account')) -}}
      </a>
    </div>
  </div>
{% endif %}

{{- flush_notice|raw -}}
", "server/privileges/user_overview.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/user_overview.twig");
    }
}

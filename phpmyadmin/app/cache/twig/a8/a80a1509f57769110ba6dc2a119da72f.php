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

/* server/privileges/add_user_fieldset.twig */
class __TwigTemplate_9bbeaf4a29a211cd1c774124e4c69377 extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_pgettext("Create new user", "New"), "html", null, true);
        yield "</div>
  <div class=\"card-body\" id=\"fieldset_add_user\">
    <a id=\"add_user_anchor\" href=\"";
        // line 4
        yield PhpMyAdmin\Url::getFromRoute("/server/privileges", (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 4, $this->source); })()));
        yield "\">";
        // line 5
        yield PhpMyAdmin\Html\Generator::getIcon("b_usradd", \_gettext("Add user account"));
        // line 6
        yield "</a>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "server/privileges/add_user_fieldset.twig";
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
        return array (  55 => 6,  53 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card\">
  <div class=\"card-header\">{{ t('New', context = 'Create new user') }}</div>
  <div class=\"card-body\" id=\"fieldset_add_user\">
    <a id=\"add_user_anchor\" href=\"{{ url('/server/privileges', url_params) }}\">
      {{- get_icon('b_usradd', t('Add user account')) -}}
    </a>
  </div>
</div>
", "server/privileges/add_user_fieldset.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/server/privileges/add_user_fieldset.twig");
    }
}

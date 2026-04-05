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

/* database/structure/change_prefix_form.twig */
class __TwigTemplate_9cd323b93322a9d1616ac0354f5f6c14 extends Template
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
        yield "<form class=\"disableAjax\" id=\"ajax_form\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 1, $this->source); })()));
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
        yield "
  <div class=\"mb-3\">
    <label for=\"initialPrefixInput\" class=\"form-label\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("From"), "html", null, true);
        yield "</label>
    <input type=\"text\" class=\"form-control\" id=\"initialPrefixInput\" name=\"from_prefix\">
  </div>
  <div>
    <label for=\"newPrefixInput\" class=\"form-label\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("To"), "html", null, true);
        yield "</label>
    <input type=\"text\" class=\"form-control\" id=\"newPrefixInput\" name=\"to_prefix\">
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
        return "database/structure/change_prefix_form.twig";
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
        return array (  59 => 8,  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form class=\"disableAjax\" id=\"ajax_form\" action=\"{{ url(route) }}\" method=\"post\">
  {{ get_hidden_inputs(url_params) }}
  <div class=\"mb-3\">
    <label for=\"initialPrefixInput\" class=\"form-label\">{{ t('From') }}</label>
    <input type=\"text\" class=\"form-control\" id=\"initialPrefixInput\" name=\"from_prefix\">
  </div>
  <div>
    <label for=\"newPrefixInput\" class=\"form-label\">{{ t('To') }}</label>
    <input type=\"text\" class=\"form-control\" id=\"newPrefixInput\" name=\"to_prefix\">
  </div>
</form>
", "database/structure/change_prefix_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/change_prefix_form.twig");
    }
}

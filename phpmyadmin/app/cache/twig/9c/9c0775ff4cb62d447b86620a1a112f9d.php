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

/* database/structure/add_prefix.twig */
class __TwigTemplate_3244707dcc9ff450a1e0a1ed0e85bcc5 extends Template
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
        yield "<form id=\"ajax_form\" action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/structure/add-prefix-table");
        yield "\" method=\"post\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
        yield "
  <div>
    <label for=\"addTablePrefixInput\" class=\"form-label\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add prefix"), "html", null, true);
        yield "</label>
    <input type=\"text\" class=\"form-control\" id=\"addTablePrefixInput\" name=\"add_prefix\">
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
        return "database/structure/add_prefix.twig";
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
        return array (  52 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"ajax_form\" action=\"{{ url('/database/structure/add-prefix-table') }}\" method=\"post\">
  {{ get_hidden_inputs(url_params) }}
  <div>
    <label for=\"addTablePrefixInput\" class=\"form-label\">{{ t('Add prefix') }}</label>
    <input type=\"text\" class=\"form-control\" id=\"addTablePrefixInput\" name=\"add_prefix\">
  </div>
</form>
", "database/structure/add_prefix.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/add_prefix.twig");
    }
}

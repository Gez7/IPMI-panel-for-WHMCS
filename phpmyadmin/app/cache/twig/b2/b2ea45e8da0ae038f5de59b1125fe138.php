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

/* database/structure/overhead.twig */
class __TwigTemplate_41f455172af0d40170ccb00dae267a2e extends Template
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
        yield "<a href=\"";
        yield PhpMyAdmin\Url::getFromRoute("/table/structure", (isset($context["table_url_params"]) || array_key_exists("table_url_params", $context) ? $context["table_url_params"] : (function () { throw new RuntimeError('Variable "table_url_params" does not exist.', 1, $this->source); })()));
        yield "#showusage\" id=\"overhead\">
  <span>";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formatted_overhead"]) || array_key_exists("formatted_overhead", $context) ? $context["formatted_overhead"] : (function () { throw new RuntimeError('Variable "formatted_overhead" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "</span>&nbsp;<span class=\"unit\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["overhead_unit"]) || array_key_exists("overhead_unit", $context) ? $context["overhead_unit"] : (function () { throw new RuntimeError('Variable "overhead_unit" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "</span>
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/overhead.twig";
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
        return array (  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a href=\"{{ url('/table/structure', table_url_params) }}#showusage\" id=\"overhead\">
  <span>{{ formatted_overhead }}</span>&nbsp;<span class=\"unit\">{{ overhead_unit }}</span>
</a>
", "database/structure/overhead.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/overhead.twig");
    }
}

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

/* config/form_display/group_header.twig */
class __TwigTemplate_bd72e0d18638ed63303128f68875e701 extends Template
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
        yield "<tr class=\"group-header group-header-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
    <th colspan=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["colspan"]) || array_key_exists("colspan", $context) ? $context["colspan"] : (function () { throw new RuntimeError('Variable "colspan" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\">
        ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header_text"]) || array_key_exists("header_text", $context) ? $context["header_text"] : (function () { throw new RuntimeError('Variable "header_text" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "
    </th>
</tr>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "config/form_display/group_header.twig";
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
        return array (  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<tr class=\"group-header group-header-{{ group }}\">
    <th colspan=\"{{ colspan }}\">
        {{ header_text }}
    </th>
</tr>
", "config/form_display/group_header.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/config/form_display/group_header.twig");
    }
}

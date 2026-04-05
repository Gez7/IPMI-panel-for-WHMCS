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

/* database/designer/edit_delete_pages.twig */
class __TwigTemplate_039294046d1bcaddca657a7fc22b1d46 extends Template
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
        yield "<form action=\"";
        yield PhpMyAdmin\Url::getFromRoute("/database/designer");
        yield "\" method=\"post\" name=\"edit_delete_pages\" id=\"edit_delete_pages\" class=\"ajax\">
  ";
        // line 2
        yield PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null));
        yield "
  <input type=\"hidden\" name=\"operation\" value=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["operation"] ?? null), "html", null, true);
        yield "\">
  <label for=\"selected_page\">
    ";
        // line 5
        yield (((($context["operation"] ?? null) == "editPage")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Page to open"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Page to delete"), "html", null, true)));
        yield ":
  </label>
  ";
        // line 7
        yield from $this->load("database/designer/page_selector.twig", 7)->unwrap()->yield(CoreExtension::toArray(["pdfwork" =>         // line 8
($context["pdfwork"] ?? null), "pages" =>         // line 9
($context["pages"] ?? null)]));
        // line 11
        yield "</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/designer/edit_delete_pages.twig";
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
        return array (  65 => 11,  63 => 9,  62 => 8,  61 => 7,  56 => 5,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "database/designer/edit_delete_pages.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/designer/edit_delete_pages.twig");
    }
}

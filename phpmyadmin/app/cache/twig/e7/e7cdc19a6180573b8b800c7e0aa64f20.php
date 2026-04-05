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

/* database/structure/favorite_anchor.twig */
class __TwigTemplate_eb2c2aa303ff32206c9855572dbc3a46 extends Template
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
        yield "<a id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_name_hash"]) || array_key_exists("table_name_hash", $context) ? $context["table_name_hash"] : (function () { throw new RuntimeError('Variable "table_name_hash" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "_favorite_anchor\"
    class=\"ajax favorite_table_anchor\"
    href=\"";
        // line 3
        yield PhpMyAdmin\Url::getFromRoute("/database/structure/favorite-table", (isset($context["fav_params"]) || array_key_exists("fav_params", $context) ? $context["fav_params"] : (function () { throw new RuntimeError('Variable "fav_params" does not exist.', 3, $this->source); })()));
        yield "\"
    title=\"";
        // line 4
        yield (((($tmp = (isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Remove from Favorites"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Add to Favorites"), "html", null, true)));
        yield "\"
    data-favtargets=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db_table_name_hash"]) || array_key_exists("db_table_name_hash", $context) ? $context["db_table_name_hash"] : (function () { throw new RuntimeError('Variable "db_table_name_hash" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 6
        yield (((($tmp = (isset($context["already_favorite"]) || array_key_exists("already_favorite", $context) ? $context["already_favorite"] : (function () { throw new RuntimeError('Variable "already_favorite" does not exist.', 6, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (PhpMyAdmin\Html\Generator::getIcon("b_favorite")) : (PhpMyAdmin\Html\Generator::getIcon("b_no_favorite")));
        yield "
</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "database/structure/favorite_anchor.twig";
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
        return array (  60 => 6,  56 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a id=\"{{ table_name_hash }}_favorite_anchor\"
    class=\"ajax favorite_table_anchor\"
    href=\"{{ url('/database/structure/favorite-table', fav_params) }}\"
    title=\"{{ already_favorite ? t('Remove from Favorites') : t('Add to Favorites') }}\"
    data-favtargets=\"{{ db_table_name_hash }}\">
    {{ already_favorite ? get_icon('b_favorite') : get_icon('b_no_favorite') }}
</a>
", "database/structure/favorite_anchor.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/database/structure/favorite_anchor.twig");
    }
}

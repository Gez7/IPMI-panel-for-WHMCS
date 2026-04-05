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

/* sql/bookmark.twig */
class __TwigTemplate_9c9258a03606360c046e7c5c7a1cabbb extends Template
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
        yield PhpMyAdmin\Url::getFromRoute("/sql");
        yield "\" method=\"post\" class=\"card bookmarkQueryForm d-print-none\"
  onsubmit=\"return ! window.pmaEmptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
  ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs();
        yield "
  <input type=\"hidden\" name=\"db\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"goto\" value=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["goto"]) || array_key_exists("goto", $context) ? $context["goto"] : (function () { throw new RuntimeError('Variable "goto" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sql_query"]) || array_key_exists("sql_query", $context) ? $context["sql_query"] : (function () { throw new RuntimeError('Variable "sql_query" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">";
        // line 11
        yield PhpMyAdmin\Html\Generator::getIcon("b_bookmark", \_gettext("Bookmark this SQL query"), true);
        yield "</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Bookmark label:"), "html", null, true);
        yield "</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    ";
        // line 18
        if ((array_key_exists("allow_shared_bookmarks", $context) && (isset($context["allow_shared_bookmarks"]) || array_key_exists("allow_shared_bookmarks", $context) ? $context["allow_shared_bookmarks"] : (function () { throw new RuntimeError('Variable "allow_shared_bookmarks" does not exist.', 18, $this->source); })()))) {
            // line 19
            yield "      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Let every user access this bookmark"), "html", null, true);
            yield "</label>
      </div>
    ";
        }
        // line 24
        yield "  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create new bookmark"), "html", null, true);
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
        return "sql/bookmark.twig";
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
        return array (  103 => 26,  99 => 24,  93 => 21,  89 => 19,  87 => 18,  80 => 14,  74 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ url('/sql') }}\" method=\"post\" class=\"card bookmarkQueryForm d-print-none\"
  onsubmit=\"return ! window.pmaEmptyCheckTheField(this, 'bkm_fields[bkm_label]');\">
  {{ get_hidden_inputs() }}
  <input type=\"hidden\" name=\"db\" value=\"{{ db }}\">
  <input type=\"hidden\" name=\"goto\" value=\"{{ goto }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_database]\" value=\"{{ db }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_user]\" value=\"{{ user }}\">
  <input type=\"hidden\" name=\"bkm_fields[bkm_sql_query]\" value=\"{{ sql_query }}\">
  <input type=\"hidden\" name=\"store_bkm\" value=\"1\">

  <div class=\"card-header\">{{ get_icon('b_bookmark', t('Bookmark this SQL query'), true) }}</div>
  <div class=\"card-body\">
    <div class=\"mb-3\">
      <label class=\"form-label\" for=\"bookmarkLabelField\">{{ t('Bookmark label:') }}</label>
      <input class=\"form-control\" id=\"bookmarkLabelField\" type=\"text\" name=\"bkm_fields[bkm_label]\" value=\"\">
    </div>

    {% if allow_shared_bookmarks is defined and allow_shared_bookmarks %}
      <div class=\"form-check form-switch\">
        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"bookmarkAllUsersCheckbox\" name=\"bkm_all_users\" value=\"true\">
        <label class=\"form-check-label\" for=\"bookmarkAllUsersCheckbox\">{{ t('Let every user access this bookmark') }}</label>
      </div>
    {% endif %}
  </div>
  <div class=\"card-footer\">
    <input class=\"btn btn-secondary\" type=\"submit\" value=\"{{ t('Create new bookmark') }}\">
  </div>
</form>
", "sql/bookmark.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/sql/bookmark.twig");
    }
}

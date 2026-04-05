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

/* create_tracking_version.twig */
class __TwigTemplate_eedeb9b6e684e57e9f0fe122a22130e0 extends Template
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
        yield "<div class=\"card mt-3\">
    <form method=\"post\" action=\"";
        // line 2
        yield PhpMyAdmin\Url::getFromRoute((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 2, $this->source); })()), (isset($context["url_params"]) || array_key_exists("url_params", $context) ? $context["url_params"] : (function () { throw new RuntimeError('Variable "url_params" does not exist.', 2, $this->source); })()));
        yield "\" class=\"disableAjax\">
        ";
        // line 3
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 3, $this->source); })()));
        yield "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["selected_table"]) {
            // line 5
            yield "            <input type=\"hidden\" name=\"selected[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selected_table"], "html", null, true);
            yield "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['selected_table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "
        <div class=\"card-header\">
                ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 9, $this->source); })())) == 1)) {
            // line 10
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Create version %1\$s of %2\$s"), (            // line 11
(isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 11, $this->source); })()) + 1), ((            // line 12
(isset($context["db"]) || array_key_exists("db", $context) ? $context["db"] : (function () { throw new RuntimeError('Variable "db" does not exist.', 12, $this->source); })()) . ".") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12))), "html", null, true);
            // line 13
            yield "
                ";
        } else {
            // line 15
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Create version %1\$s"), ((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 15, $this->source); })()) + 1)), "html", null, true);
            yield "
                ";
        }
        // line 17
        yield "        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["last_version"]) || array_key_exists("last_version", $context) ? $context["last_version"] : (function () { throw new RuntimeError('Variable "last_version" does not exist.', 20, $this->source); })()) + 1), "html", null, true);
        yield "\">
            <p>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Track these data definition statements:"), "html", null, true);
        yield "</p>

            ";
        // line 23
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) == "both") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 23, $this->source); })()) == "table"))) {
            // line 24
            yield "                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"";
            // line 25
            yield ((CoreExtension::inFilter("ALTER TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 25, $this->source); })()))) ? (" checked") : (""));
            yield ">
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"";
            // line 28
            yield ((CoreExtension::inFilter("RENAME TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 28, $this->source); })()))) ? (" checked") : (""));
            yield ">
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"";
            // line 31
            yield ((CoreExtension::inFilter("CREATE TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 31, $this->source); })()))) ? (" checked") : (""));
            yield ">
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"";
            // line 34
            yield ((CoreExtension::inFilter("DROP TABLE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 34, $this->source); })()))) ? (" checked") : (""));
            yield ">
                DROP TABLE<br>
            ";
        }
        // line 37
        yield "            ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 37, $this->source); })()) == "both")) {
            // line 38
            yield "                <br>
            ";
        }
        // line 40
        yield "            ";
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "both") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 40, $this->source); })()) == "view"))) {
            // line 41
            yield "                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"";
            // line 42
            yield ((CoreExtension::inFilter("ALTER VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 42, $this->source); })()))) ? (" checked") : (""));
            yield ">
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"";
            // line 45
            yield ((CoreExtension::inFilter("CREATE VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 45, $this->source); })()))) ? (" checked") : (""));
            yield ">
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"";
            // line 48
            yield ((CoreExtension::inFilter("DROP VIEW", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 48, $this->source); })()))) ? (" checked") : (""));
            yield ">
                DROP VIEW<br>
            ";
        }
        // line 51
        yield "            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"";
        // line 54
        yield ((CoreExtension::inFilter("CREATE INDEX", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 54, $this->source); })()))) ? (" checked") : (""));
        yield ">
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"";
        // line 57
        yield ((CoreExtension::inFilter("DROP INDEX", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 57, $this->source); })()))) ? (" checked") : (""));
        yield ">
            DROP INDEX<br>

            <p>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Track these data manipulation statements:"), "html", null, true);
        yield "</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"";
        // line 62
        yield ((CoreExtension::inFilter("INSERT", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 62, $this->source); })()))) ? (" checked") : (""));
        yield ">
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"";
        // line 65
        yield ((CoreExtension::inFilter("UPDATE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 65, $this->source); })()))) ? (" checked") : (""));
        yield ">
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"";
        // line 68
        yield ((CoreExtension::inFilter("DELETE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 68, $this->source); })()))) ? (" checked") : (""));
        yield ">
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"";
        // line 71
        yield ((CoreExtension::inFilter("TRUNCATE", (isset($context["default_statements"]) || array_key_exists("default_statements", $context) ? $context["default_statements"] : (function () { throw new RuntimeError('Variable "default_statements" does not exist.', 71, $this->source); })()))) ? (" checked") : (""));
        yield ">
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Create version"), "html", null, true);
        yield "\">
        </div>
    </form>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "create_tracking_version.twig";
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
        return array (  197 => 77,  188 => 71,  183 => 68,  178 => 65,  173 => 62,  169 => 60,  163 => 57,  158 => 54,  154 => 51,  148 => 48,  143 => 45,  138 => 42,  136 => 41,  133 => 40,  129 => 38,  126 => 37,  120 => 34,  115 => 31,  110 => 28,  105 => 25,  103 => 24,  101 => 23,  96 => 21,  92 => 20,  87 => 17,  81 => 15,  77 => 13,  75 => 12,  74 => 11,  72 => 10,  70 => 9,  66 => 7,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"card mt-3\">
    <form method=\"post\" action=\"{{ url(route, url_params) }}\" class=\"disableAjax\">
        {{ get_hidden_inputs(db) }}
        {% for selected_table in selected %}
            <input type=\"hidden\" name=\"selected[]\" value=\"{{ selected_table }}\">
        {% endfor %}

        <div class=\"card-header\">
                {% if selected|length == 1 %}
                    {{ t('Create version %1\$s of %2\$s')|format(
                        last_version + 1,
                        db ~ '.' ~ selected[0]
                    ) }}
                {% else %}
                    {{ t('Create version %1\$s')|format(last_version + 1) }}
                {% endif %}
        </div>

        <div class=\"card-body\">
            <input type=\"hidden\" name=\"version\" value=\"{{ last_version + 1 }}\">
            <p>{{ t('Track these data definition statements:') }}</p>

            {% if type == 'both' or type == 'table' %}
                <input type=\"checkbox\" name=\"alter_table\" value=\"true\"
                    {{- 'ALTER TABLE' in default_statements ? ' checked' }}>
                ALTER TABLE<br>
                <input type=\"checkbox\" name=\"rename_table\" value=\"true\"
                    {{- 'RENAME TABLE' in default_statements ? ' checked' }}>
                RENAME TABLE<br>
                <input type=\"checkbox\" name=\"create_table\" value=\"true\"
                    {{- 'CREATE TABLE' in default_statements ? ' checked' }}>
                CREATE TABLE<br>
                <input type=\"checkbox\" name=\"drop_table\" value=\"true\"
                    {{- 'DROP TABLE' in default_statements ? ' checked' }}>
                DROP TABLE<br>
            {% endif %}
            {% if type == 'both' %}
                <br>
            {% endif %}
            {% if type == 'both' or type == 'view' %}
                <input type=\"checkbox\" name=\"alter_view\" value=\"true\"
                    {{- 'ALTER VIEW' in default_statements ? ' checked' }}>
                ALTER VIEW<br>
                <input type=\"checkbox\" name=\"create_view\" value=\"true\"
                    {{- 'CREATE VIEW' in default_statements ? ' checked' }}>
                CREATE VIEW<br>
                <input type=\"checkbox\" name=\"drop_view\" value=\"true\"
                    {{- 'DROP VIEW' in default_statements ? ' checked' }}>
                DROP VIEW<br>
            {% endif %}
            <br>

            <input type=\"checkbox\" name=\"create_index\" value=\"true\"
                {{- 'CREATE INDEX' in default_statements ? ' checked' }}>
            CREATE INDEX<br>
            <input type=\"checkbox\" name=\"drop_index\" value=\"true\"
                {{- 'DROP INDEX' in default_statements ? ' checked' }}>
            DROP INDEX<br>

            <p>{{ t('Track these data manipulation statements:') }}</p>
            <input type=\"checkbox\" name=\"insert\" value=\"true\"
                {{- 'INSERT' in default_statements ? ' checked' }}>
            INSERT<br>
            <input type=\"checkbox\" name=\"update\" value=\"true\"
                {{- 'UPDATE' in default_statements ? ' checked' }}>
            UPDATE<br>
            <input type=\"checkbox\" name=\"delete\" value=\"true\"
                {{- 'DELETE' in default_statements ? ' checked' }}>
            DELETE<br>
            <input type=\"checkbox\" name=\"truncate\" value=\"true\"
                {{- 'TRUNCATE' in default_statements ? ' checked' }}>
            TRUNCATE<br>
        </div>

        <div class=\"card-footer\">
            <input type=\"hidden\" name=\"submit_create_version\" value=\"1\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ t('Create version') }}\">
        </div>
    </form>
</div>
", "create_tracking_version.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/create_tracking_version.twig");
    }
}

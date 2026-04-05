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

/* columns_definitions/partitions.twig */
class __TwigTemplate_8cdfecf6f03b90a726cdfa9b1e95680d extends Template
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
        $context["partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY", "RANGE", "RANGE COLUMNS", "LIST", "LIST COLUMNS"];
        // line 12
        $context["sub_partition_options"] = ["", "HASH", "LINEAR HASH", "KEY", "LINEAR KEY"];
        // line 13
        $context["value_type_options"] = ["", "LESS THAN", "LESS THAN MAXVALUE", "IN"];
        // line 14
        yield "
<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition by:"), "html", null, true);
        yield "</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["partition_options"]) || array_key_exists("partition_options", $context) ? $context["partition_options"] : (function () { throw new RuntimeError('Variable "partition_options" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 21
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "\"";
            // line 22
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 22, $this->source); })()), "partition_by", [], "array", false, false, false, 22) == $context["option"])) {
                // line 23
                yield "                            selected";
            }
            // line 24
            yield ">
                        ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
            yield "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression or column list"), "html", null, true);
        yield "\"
                value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 33, $this->source); })()), "partition_expr", [], "array", false, false, false, 33), "html", null, true);
        yield "\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partitions:"), "html", null, true);
        yield "</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"";
        // line 40
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 40, $this->source); })()), "partition_count", [], "array", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 40, $this->source); })()), "partition_count", [], "array", false, false, false, 40), "html", null, true)) : (""));
        yield "\">
        </td>
    </tr>
    ";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 43, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartition by:"), "html", null, true);
            yield "</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sub_partition_options"]) || array_key_exists("sub_partition_options", $context) ? $context["sub_partition_options"] : (function () { throw new RuntimeError('Variable "sub_partition_options" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                yield "                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "\"";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 50, $this->source); })()), "subpartition_by", [], "array", false, false, false, 50) == $context["option"])) {
                    // line 51
                    yield "                            selected";
                }
                // line 52
                yield ">
                        ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Expression or column list"), "html", null, true);
            yield "\"
                    value=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 61, $this->source); })()), "subpartition_expr", [], "array", false, false, false, 61), "html", null, true);
            yield "\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartitions:"), "html", null, true);
            yield "</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 68, $this->source); })()), "subpartition_count", [], "array", false, false, false, 68)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 68, $this->source); })()), "subpartition_count", [], "array", false, false, false, 68), "html", null, true)) : (""));
            yield "\">
            </td>
        </tr>
    ";
        }
        // line 72
        yield "</table>
";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 73, $this->source); })()), "partition_count", [], "array", false, false, false, 73) > 1)) {
            // line 74
            yield "    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Partition"), "html", null, true);
            yield "</th>
            ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 77, $this->source); })()), "value_enabled", [], "array", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Values"), "html", null, true);
                yield "</th>
            ";
            }
            // line 80
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 80, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 80) && (CoreExtension::getAttribute($this->env, $this->source,             // line 81
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 81, $this->source); })()), "subpartition_count", [], "array", false, false, false, 81) > 1))) {
                // line 82
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Subpartition"), "html", null, true);
                yield "</th>
            ";
            }
            // line 84
            yield "            <th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Engine"), "html", null, true);
            yield "</th>
            <th>";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment"), "html", null, true);
            yield "</th>
            <th>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Data directory"), "html", null, true);
            yield "</th>
            <th>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index directory"), "html", null, true);
            yield "</th>
            <th>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Max rows"), "html", null, true);
            yield "</th>
            <th>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Min rows"), "html", null, true);
            yield "</th>
            <th>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Table space"), "html", null, true);
            yield "</th>
            <th>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Node group"), "html", null, true);
            yield "</th>
        </tr></thead>
        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 93, $this->source); })()), "partitions", [], "array", false, false, false, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 94
                yield "            ";
                $context["rowspan"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "subpartition_count", [], "array", false, false, false, 94))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source,                 // line 95
$context["partition"], "subpartition_count", [], "array", false, false, false, 95) + 1)) : (2));
                // line 96
                yield "            <tr>
                <td rowspan=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new RuntimeError('Variable "rowspan" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "\">
                    <input type=\"text\" name=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 98), "html", null, true);
                yield "[name]\"
                        value=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "name", [], "array", false, false, false, 99), "html", null, true);
                yield "\">
                </td>
                ";
                // line 101
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 101, $this->source); })()), "value_enabled", [], "array", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 102
                    yield "                    <td rowspan=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["rowspan"]) || array_key_exists("rowspan", $context) ? $context["rowspan"] : (function () { throw new RuntimeError('Variable "rowspan" does not exist.', 102, $this->source); })()), "html", null, true);
                    yield "\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"";
                    // line 104
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 104), "html", null, true);
                    yield "[value_type]\">
                            ";
                    // line 105
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["value_type_options"]) || array_key_exists("value_type_options", $context) ? $context["value_type_options"] : (function () { throw new RuntimeError('Variable "value_type_options" does not exist.', 105, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 106
                        yield "                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "\"";
                        // line 107
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "value_type", [], "array", false, false, false, 107) == $context["option"])) {
                            // line 108
                            yield "                                        selected";
                        }
                        // line 109
                        yield ">
                                    ";
                        // line 110
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                        yield "
                                </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 113
                    yield "                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"";
                    // line 115
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "prefix", [], "array", false, false, false, 115), "html", null, true);
                    yield "[value]\"
                            value=\"";
                    // line 116
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "value", [], "array", false, false, false, 116), "html", null, true);
                    yield "\">
                    </td>
                ";
                }
                // line 119
                yield "            </tr>

            ";
                // line 121
                if (CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", true, true, false, 121)) {
                    // line 122
                    yield "                ";
                    $context["subpartitions"] = CoreExtension::getAttribute($this->env, $this->source, $context["partition"], "subpartitions", [], "array", false, false, false, 122);
                    // line 123
                    yield "            ";
                } else {
                    // line 124
                    yield "                ";
                    $context["subpartitions"] = [$context["partition"]];
                    // line 125
                    yield "            ";
                }
                // line 126
                yield "
            ";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subpartitions"]) || array_key_exists("subpartitions", $context) ? $context["subpartitions"] : (function () { throw new RuntimeError('Variable "subpartitions" does not exist.', 127, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["subpartition"]) {
                    // line 128
                    yield "                <tr>
                    ";
                    // line 129
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 129, $this->source); })()), "can_have_subpartitions", [], "array", false, false, false, 129) && (CoreExtension::getAttribute($this->env, $this->source,                     // line 130
(isset($context["partition_details"]) || array_key_exists("partition_details", $context) ? $context["partition_details"] : (function () { throw new RuntimeError('Variable "partition_details" does not exist.', 130, $this->source); })()), "subpartition_count", [], "array", false, false, false, 130) > 1))) {
                        // line 131
                        yield "                        <td>
                            <input type=\"text\" name=\"";
                        // line 132
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 132), "html", null, true);
                        yield "[name]\"
                                value=\"";
                        // line 133
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "name", [], "array", false, false, false, 133), "html", null, true);
                        yield "\">
                        </td>
                    ";
                    }
                    // line 136
                    yield "                    <td>
                      <select name=\"";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 137), "html", null, true);
                    yield "[engine]\" aria-label=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Storage engine"), "html", null, true);
                    yield "\">
                        <option value=\"\"></option>
                        ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["storage_engines"]) || array_key_exists("storage_engines", $context) ? $context["storage_engines"] : (function () { throw new RuntimeError('Variable "storage_engines" does not exist.', 139, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["engine"]) {
                        // line 140
                        yield "                          <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 140), "html", null, true);
                        yield "\"";
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "comment", [], "any", false, false, false, 140), "html", null, true);
                            yield "\"";
                        }
                        // line 141
                        yield (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 141)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "engine", [], "array", false, false, false, 141)))) ? (" selected") : (""));
                        yield ">";
                        // line 142
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["engine"], "name", [], "any", false, false, false, 142), "html", null, true);
                        // line 143
                        yield "</option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['engine'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 145
                    yield "                      </select>
                    </td>
                    <td>
                        <textarea name=\"";
                    // line 148
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 148), "html", null, true);
                    yield "[comment]\">";
                    // line 149
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "comment", [], "array", false, false, false, 149), "html", null, true);
                    // line 150
                    yield "</textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 153), "html", null, true);
                    yield "[data_directory]\"
                            value=\"";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "data_directory", [], "array", false, false, false, 154), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 157), "html", null, true);
                    yield "[index_directory]\"
                            value=\"";
                    // line 158
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "index_directory", [], "array", false, false, false, 158), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"";
                    // line 161
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 161), "html", null, true);
                    yield "[max_rows]\"
                            value=\"";
                    // line 162
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "max_rows", [], "array", false, false, false, 162), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"";
                    // line 165
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 165), "html", null, true);
                    yield "[min_rows]\"
                            value=\"";
                    // line 166
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "min_rows", [], "array", false, false, false, 166), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"";
                    // line 169
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 169), "html", null, true);
                    yield "[tablespace]\"
                            value=\"";
                    // line 170
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "tablespace", [], "array", false, false, false, 170), "html", null, true);
                    yield "\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"";
                    // line 173
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "prefix", [], "array", false, false, false, 173), "html", null, true);
                    yield "[node_group]\"
                            value=\"";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpartition"], "node_group", [], "array", false, false, false, 174), "html", null, true);
                    yield "\">
                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subpartition'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['partition'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "    </table>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "columns_definitions/partitions.twig";
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
        return array (  483 => 179,  477 => 178,  467 => 174,  463 => 173,  457 => 170,  453 => 169,  447 => 166,  443 => 165,  437 => 162,  433 => 161,  427 => 158,  423 => 157,  417 => 154,  413 => 153,  408 => 150,  406 => 149,  403 => 148,  398 => 145,  391 => 143,  389 => 142,  386 => 141,  377 => 140,  373 => 139,  366 => 137,  363 => 136,  357 => 133,  353 => 132,  350 => 131,  348 => 130,  347 => 129,  344 => 128,  340 => 127,  337 => 126,  334 => 125,  331 => 124,  328 => 123,  325 => 122,  323 => 121,  319 => 119,  313 => 116,  309 => 115,  305 => 113,  296 => 110,  293 => 109,  290 => 108,  288 => 107,  284 => 106,  280 => 105,  276 => 104,  270 => 102,  268 => 101,  263 => 99,  259 => 98,  255 => 97,  252 => 96,  250 => 95,  248 => 94,  244 => 93,  239 => 91,  235 => 90,  231 => 89,  227 => 88,  223 => 87,  219 => 86,  215 => 85,  210 => 84,  204 => 82,  202 => 81,  200 => 80,  194 => 78,  192 => 77,  188 => 76,  184 => 74,  182 => 73,  179 => 72,  172 => 68,  166 => 65,  159 => 61,  155 => 60,  149 => 56,  140 => 53,  137 => 52,  134 => 51,  132 => 50,  128 => 49,  124 => 48,  118 => 45,  115 => 44,  113 => 43,  107 => 40,  101 => 37,  94 => 33,  90 => 32,  84 => 28,  75 => 25,  72 => 24,  69 => 23,  67 => 22,  63 => 21,  59 => 20,  53 => 17,  48 => 14,  46 => 13,  44 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set partition_options = [
    '',
    'HASH',
    'LINEAR HASH',
    'KEY',
    'LINEAR KEY',
    'RANGE',
    'RANGE COLUMNS',
    'LIST',
    'LIST COLUMNS'
] %}
{% set sub_partition_options = ['', 'HASH', 'LINEAR HASH', 'KEY', 'LINEAR KEY'] %}
{% set value_type_options = ['', 'LESS THAN', 'LESS THAN MAXVALUE', 'IN'] %}

<table class=\"table table-borderless w-auto align-middle mb-0\" id=\"partition_table\">
    <tr class=\"align-middle\">
        <td><label for=\"partition_by\">{{ t('Partition by:') }}</label></td>
        <td>
            <select name=\"partition_by\" id=\"partition_by\">
                {% for option in partition_options %}
                    <option value=\"{{ option }}\"
                        {%- if partition_details['partition_by'] == option %}
                            selected
                        {%- endif %}>
                        {{ option }}
                    </option>
                {% endfor %}
            </select>
        </td>
        <td>
            (<input name=\"partition_expr\" type=\"text\"
                placeholder=\"{{ t('Expression or column list') }}\"
                value=\"{{ partition_details['partition_expr'] }}\">)
        </td>
    </tr>
    <tr class=\"align-middle\">
        <td><label for=\"partition_count\">{{ t('Partitions:') }}</label></td>
        <td colspan=\"2\">
            <input name=\"partition_count\" type=\"number\" min=\"2\"
                value=\"{{ partition_details['partition_count'] ?: '' }}\">
        </td>
    </tr>
    {% if partition_details['can_have_subpartitions'] %}
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_by\">{{ t('Subpartition by:') }}</label></td>
            <td>
                <select name=\"subpartition_by\" id=\"subpartition_by\">
                    {% for option in sub_partition_options %}
                    <option value=\"{{ option }}\"
                        {%- if partition_details['subpartition_by'] == option %}
                            selected
                        {%- endif %}>
                        {{ option }}
                    </option>
                {% endfor %}
                </select>
            </td>
            <td>
                (<input name=\"subpartition_expr\" type=\"text\"
                    placeholder=\"{{ t('Expression or column list') }}\"
                    value=\"{{ partition_details['subpartition_expr'] }}\">)
            </td>
        </tr>
        <tr class=\"align-middle\">
            <td><label for=\"subpartition_count\">{{ t('Subpartitions:') }}</label></td>
            <td colspan=\"2\">
                <input name=\"subpartition_count\" type=\"number\" min=\"2\"
                    value=\"{{ partition_details['subpartition_count'] ?: '' }}\">
            </td>
        </tr>
    {% endif %}
</table>
{% if partition_details['partition_count'] > 1 %}
    <table class=\"table align-middle\" id=\"partition_definition_table\">
        <thead><tr>
            <th>{{ t('Partition') }}</th>
            {% if partition_details['value_enabled'] %}
                <th>{{ t('Values') }}</th>
            {% endif %}
            {% if partition_details['can_have_subpartitions']
                and partition_details['subpartition_count'] > 1 %}
                <th>{{ t('Subpartition') }}</th>
            {% endif %}
            <th>{{ t('Engine') }}</th>
            <th>{{ t('Comment') }}</th>
            <th>{{ t('Data directory') }}</th>
            <th>{{ t('Index directory') }}</th>
            <th>{{ t('Max rows') }}</th>
            <th>{{ t('Min rows') }}</th>
            <th>{{ t('Table space') }}</th>
            <th>{{ t('Node group') }}</th>
        </tr></thead>
        {% for partition in partition_details['partitions'] %}
            {% set rowspan = partition['subpartition_count'] is not empty
                ? partition['subpartition_count'] + 1 : 2 %}
            <tr>
                <td rowspan=\"{{ rowspan }}\">
                    <input type=\"text\" name=\"{{ partition['prefix'] }}[name]\"
                        value=\"{{ partition['name'] }}\">
                </td>
                {% if partition_details['value_enabled'] %}
                    <td rowspan=\"{{ rowspan }}\" class=\"align-middle\">
                        <select class=\"partition_value\"
                            name=\"{{ partition['prefix'] }}[value_type]\">
                            {% for option in value_type_options %}
                                <option value=\"{{ option }}\"
                                    {%- if partition['value_type'] == option %}
                                        selected
                                    {%- endif %}>
                                    {{ option }}
                                </option>
                            {% endfor %}
                        </select>
                        <input type=\"text\" class=\"partition_value\"
                            name=\"{{ partition['prefix'] }}[value]\"
                            value=\"{{ partition['value'] }}\">
                    </td>
                {% endif %}
            </tr>

            {% if partition['subpartitions'] is defined %}
                {% set subpartitions = partition['subpartitions'] %}
            {% else %}
                {% set subpartitions = [partition] %}
            {% endif %}

            {% for subpartition in subpartitions %}
                <tr>
                    {% if partition_details['can_have_subpartitions']
                        and partition_details['subpartition_count'] > 1 %}
                        <td>
                            <input type=\"text\" name=\"{{ subpartition['prefix'] }}[name]\"
                                value=\"{{ subpartition['name'] }}\">
                        </td>
                    {% endif %}
                    <td>
                      <select name=\"{{ subpartition['prefix'] }}[engine]\" aria-label=\"{{ t('Storage engine') }}\">
                        <option value=\"\"></option>
                        {% for engine in storage_engines %}
                          <option value=\"{{ engine.name }}\"{% if engine.comment is not empty %} title=\"{{ engine.comment }}\"{% endif %}
                            {{- engine.name|lower == subpartition['engine']|lower ? ' selected' }}>
                            {{- engine.name -}}
                          </option>
                        {% endfor %}
                      </select>
                    </td>
                    <td>
                        <textarea name=\"{{ subpartition['prefix'] }}[comment]\">
                            {{- subpartition['comment'] -}}
                        </textarea>
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[data_directory]\"
                            value=\"{{ subpartition['data_directory'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[index_directory]\"
                            value=\"{{ subpartition['index_directory'] }}\">
                    </td>
                    <td>
                        <input type=\"number\" name=\"{{ subpartition['prefix'] }}[max_rows]\"
                            value=\"{{ subpartition['max_rows'] }}\">
                    </td>
                    <td>
                        <input type=\"number\" min=\"0\" name=\"{{ subpartition['prefix'] }}[min_rows]\"
                            value=\"{{ subpartition['min_rows'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" min=\"0\" name=\"{{ subpartition['prefix'] }}[tablespace]\"
                            value=\"{{ subpartition['tablespace'] }}\">
                    </td>
                    <td>
                        <input type=\"text\" name=\"{{ subpartition['prefix'] }}[node_group]\"
                            value=\"{{ subpartition['node_group'] }}\">
                    </td>
                </tr>
            {% endfor %}
        {% endfor %}
    </table>
{% endif %}
", "columns_definitions/partitions.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/columns_definitions/partitions.twig");
    }
}

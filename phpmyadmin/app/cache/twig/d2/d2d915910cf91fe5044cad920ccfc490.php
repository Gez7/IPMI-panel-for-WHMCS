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

/* table/index_form.twig */
class __TwigTemplate_0729b9db2f8912ba34372d7f13480c16 extends Template
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
        yield PhpMyAdmin\Url::getFromRoute("/table/indexes");
        yield "\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"card ajax\">

    ";
        // line 7
        yield PhpMyAdmin\Url::getHiddenInputs((isset($context["form_params"]) || array_key_exists("form_params", $context) ? $context["form_params"] : (function () { throw new RuntimeError('Variable "form_params" does not exist.', 7, $this->source); })()));
        yield "
    ";
        // line 8
        if ((($tmp = (isset($context["is_from_nav"]) || array_key_exists("is_from_nav", $context) ? $context["is_from_nav"] : (function () { throw new RuntimeError('Variable "is_from_nav" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    ";
        }
        // line 11
        yield "
    <div class=\"card-body\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index name:"), "html", null, true);
        yield "
                            ";
        // line 19
        yield PhpMyAdmin\Html\Generator::showHint(\_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 29, $this->source); })()), "getName", [], "method", false, false, false, 29), "html", null, true);
        yield "\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index choice:"), "html", null, true);
        yield "
                            ";
        // line 38
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"";
        // line 43
        yield (((($tmp = (isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 43, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" disabled") : (""));
        yield ">
                ";
        // line 44
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "getChoice", [], "method", false, false, false, 44) == "PRIMARY") ||  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 44, $this->source); })()), "hasPrimary", [], "method", false, false, false, 44))) {
            // line 45
            yield "                  <option value=\"PRIMARY\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 45, $this->source); })()), "getChoice", [], "method", false, false, false, 45) == "PRIMARY")) ? (" selected") : (""));
            yield ">PRIMARY</option>
                ";
        }
        // line 47
        yield "                <option value=\"INDEX\"";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 47, $this->source); })()), "getChoice", [], "method", false, false, false, 47) == "INDEX")) ? (" selected") : (""));
        yield ">INDEX</option>
                <option value=\"UNIQUE\"";
        // line 48
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 48, $this->source); })()), "getChoice", [], "method", false, false, false, 48) == "UNIQUE")) ? (" selected") : (""));
        yield ">UNIQUE</option>
                <option value=\"SPATIAL\"";
        // line 49
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 49, $this->source); })()), "getChoice", [], "method", false, false, false, 49) == "SPATIAL")) ? (" selected") : (""));
        yield ">SPATIAL</option>
                <option value=\"FULLTEXT\"";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 50, $this->source); })()), "getChoice", [], "method", false, false, false, 50) == "FULLTEXT")) ? (" selected") : (""));
        yield ">FULLTEXT</option>
              </select>
            </div>

            ";
        // line 54
        if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 54, $this->source); })()) != "disabled")) {
            // line 55
            yield "            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"";
            // line 56
            yield ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 56, $this->source); })()) == "open")) ? ("true") : ("false"));
            yield "\" aria-controls=\"advancedOptions\">
                ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Advanced options"), "html", null, true);
            yield "
              </button>
            </div>
            <div class=\"collapse mb-3";
            // line 60
            yield ((((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 60, $this->source); })()) == "open")) ? (" show") : (""));
            yield "\" id=\"advancedOptions\">
            ";
        }
        // line 62
        yield "
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Key block size:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 76, $this->source); })()), "getKeyBlockSize", [], "method", false, false, false, 76), "html", null, true);
        yield "\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Index type:"), "html", null, true);
        yield "
                            ";
        // line 85
        yield PhpMyAdmin\Html\MySQLDocumentation::show("ALTER_TABLE");
        yield "
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["", "BTREE", "HASH"]);
        foreach ($context['_seq'] as $context["_key"] => $context["index_type"]) {
            // line 92
            yield "                  <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "\"";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 92, $this->source); })()), "getType", [], "method", false, false, false, 92) == $context["index_type"])) ? (" selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["index_type"], "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['index_type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Parser:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 110, $this->source); })()), "getParser", [], "method", false, false, false, 110), "html", null, true);
        yield "\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Comment:"), "html", null, true);
        yield "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 127, $this->source); })()), "getComment", [], "method", false, false, false, 127), "html", null, true);
        yield "\">
            </div>

            ";
        // line 130
        if (((isset($context["default_sliders_state"]) || array_key_exists("default_sliders_state", $context) ? $context["default_sliders_state"] : (function () { throw new RuntimeError('Variable "default_sliders_state" does not exist.', 130, $this->source); })()) != "disabled")) {
            // line 131
            yield "            </div>
            ";
        }
        // line 133
        yield "
        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Column"), "html", null, true);
        yield "
                    </th>
                    <th>
                        ";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Size"), "html", null, true);
        yield "
                    </th>
                </tr>
            </thead>
            ";
        // line 148
        $context["spatial_types"] = ["geometry", "point", "linestring", "polygon", "multipoint", "multilinestring", "multipolygon", "geomtrycollection"];
        // line 158
        yield "            <tbody>
                ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 159, $this->source); })()), "getColumns", [], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 160
            yield "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drag to reorder"), "html", null, true);
            yield "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ignore"), "html", null, true);
            yield " --
                                </option>
                                ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 169, $this->source); })()));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 170
                yield "                                    ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 170, $this->source); })()), "getChoice", [], "method", false, false, false, 170) != "FULLTEXT") || CoreExtension::matches("/(char|text)/i",                 // line 171
$context["field_type"])) && ((CoreExtension::getAttribute($this->env, $this->source,                 // line 172
(isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 172, $this->source); })()), "getChoice", [], "method", false, false, false, 172) != "SPATIAL") || CoreExtension::inFilter(                // line 173
$context["field_type"], (isset($context["spatial_types"]) || array_key_exists("spatial_types", $context) ? $context["spatial_types"] : (function () { throw new RuntimeError('Variable "spatial_types" does not exist.', 173, $this->source); })()))))) {
                    // line 174
                    yield "
                                        <option value=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield "\"";
                    // line 176
                    if (($context["field_name"] == CoreExtension::getAttribute($this->env, $this->source, $context["column"], "getName", [], "method", false, false, false, 176))) {
                        // line 177
                        yield "                                                selected";
                    }
                    // line 178
                    yield ">
                                            ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                // line 182
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['field_name'], $context['field_type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            yield "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 190
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 190, $this->source); })()), "getChoice", [], "method", false, false, false, 190) != "SPATIAL")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 191
$context["column"], "getSubPart", [], "method", false, false, false, 191), "html", null, true)) : (""));
            yield "\">
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "                ";
        if (((isset($context["add_fields"]) || array_key_exists("add_fields", $context) ? $context["add_fields"] : (function () { throw new RuntimeError('Variable "add_fields" does not exist.', 195, $this->source); })()) > 0)) {
            // line 196
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["add_fields"]) || array_key_exists("add_fields", $context) ? $context["add_fields"] : (function () { throw new RuntimeError('Variable "add_fields" does not exist.', 196, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 197
                yield "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Drag to reorder"), "html", null, true);
                yield "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Ignore"), "html", null, true);
                yield " --</option>
                                    ";
                // line 204
                $context["j"] = 0;
                // line 205
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 205, $this->source); })()));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 206
                    yield "                                        ";
                    if ((($tmp = (isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 206, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 207
                        yield "                                            ";
                        $context["col_index"] = CoreExtension::getAttribute($this->env, $this->source, $context["field_type"], 1, [], "array", false, false, false, 207);
                        // line 208
                        yield "                                            ";
                        $context["field_type"] = CoreExtension::getAttribute($this->env, $this->source, $context["field_type"], 0, [], "array", false, false, false, 208);
                        // line 209
                        yield "                                        ";
                    }
                    // line 210
                    yield "                                        ";
                    $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 210, $this->source); })()) + 1);
                    // line 211
                    yield "                                        <option value=\"";
                    yield ((array_key_exists("col_index", $context)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(                    // line 212
(isset($context["col_index"]) || array_key_exists("col_index", $context) ? $context["col_index"] : (function () { throw new RuntimeError('Variable "col_index" does not exist.', 212, $this->source); })()), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true)));
                    yield "\"";
                    // line 213
                    yield ((((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 213, $this->source); })()) == $context["i"])) ? (" selected") : (""));
                    yield ">
                                            ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                    yield " [";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_type"], "html", null, true);
                    yield "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['field_name'], $context['field_type'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                yield "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            yield "                ";
        }
        // line 229
        yield "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf(\_gettext("Add %s column(s) to index"), 1), "html", null, true);
        yield "\">
            </div>
        </div>
        </div>
    </div>
    ";
        // line 243
        if ((($tmp =  !(isset($context["create_edit_table"]) || array_key_exists("create_edit_table", $context) ? $context["create_edit_table"] : (function () { throw new RuntimeError('Variable "create_edit_table" does not exist.', 243, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 244
            yield "<div class=\"card-footer\">
        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Go"), "html", null, true);
            yield "</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(\_gettext("Preview SQL"), "html", null, true);
            yield "</button>
    </div>";
        }
        // line 249
        yield "</form>
";
        // line 250
        if ((($tmp = (isset($context["is_from_nav"]) || array_key_exists("is_from_nav", $context) ? $context["is_from_nav"] : (function () { throw new RuntimeError('Variable "is_from_nav" does not exist.', 250, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "  ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "modals/preview_sql_modal.twig");
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "table/index_form.twig";
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
        return array (  507 => 251,  505 => 250,  502 => 249,  497 => 246,  493 => 245,  490 => 244,  488 => 243,  480 => 237,  470 => 229,  467 => 228,  451 => 217,  440 => 214,  436 => 213,  433 => 212,  431 => 211,  428 => 210,  425 => 209,  422 => 208,  419 => 207,  416 => 206,  411 => 205,  409 => 204,  405 => 203,  398 => 199,  394 => 197,  389 => 196,  386 => 195,  376 => 191,  375 => 190,  366 => 183,  360 => 182,  352 => 179,  349 => 178,  346 => 177,  344 => 176,  341 => 175,  338 => 174,  336 => 173,  335 => 172,  334 => 171,  332 => 170,  328 => 169,  323 => 167,  315 => 162,  311 => 160,  307 => 159,  304 => 158,  302 => 148,  295 => 144,  289 => 141,  279 => 133,  275 => 131,  273 => 130,  267 => 127,  254 => 117,  244 => 110,  232 => 101,  223 => 94,  210 => 92,  206 => 91,  197 => 85,  193 => 84,  182 => 76,  170 => 67,  163 => 62,  158 => 60,  152 => 57,  148 => 56,  145 => 55,  143 => 54,  136 => 50,  132 => 49,  128 => 48,  123 => 47,  117 => 45,  115 => 44,  111 => 43,  103 => 38,  99 => 37,  88 => 29,  75 => 19,  71 => 18,  62 => 11,  58 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form action=\"{{ url('/table/indexes') }}\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"card ajax\">

    {{ get_hidden_inputs(form_params) }}
    {% if is_from_nav %}
      <input type=\"hidden\" name=\"do_save_data\" value=\"1\">
    {% endif %}

    <div class=\"card-body\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            {{ t('Index name:') }}
                            {{ show_hint(t('\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!')) }}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"{{ index.getName() }}\"
                    onfocus=\"this.select()\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            {{ t('Index choice:') }}
                            {{ show_mysql_docu('ALTER_TABLE') }}
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_choice]\" id=\"select_index_choice\"{{ create_edit_table ? ' disabled' }}>
                {% if index.getChoice() == 'PRIMARY' or not index.hasPrimary() %}
                  <option value=\"PRIMARY\"{{ index.getChoice() == 'PRIMARY' ? ' selected' }}>PRIMARY</option>
                {% endif %}
                <option value=\"INDEX\"{{ index.getChoice() == 'INDEX' ? ' selected' }}>INDEX</option>
                <option value=\"UNIQUE\"{{ index.getChoice() == 'UNIQUE' ? ' selected' }}>UNIQUE</option>
                <option value=\"SPATIAL\"{{ index.getChoice() == 'SPATIAL' ? ' selected' }}>SPATIAL</option>
                <option value=\"FULLTEXT\"{{ index.getChoice() == 'FULLTEXT' ? ' selected' }}>FULLTEXT</option>
              </select>
            </div>

            {% if default_sliders_state != 'disabled' %}
            <div class=\"mb-3\">
              <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#advancedOptions\" aria-expanded=\"{{ default_sliders_state == 'open' ? 'true' : 'false' }}\" aria-controls=\"advancedOptions\">
                {{ t('Advanced options') }}
              </button>
            </div>
            <div class=\"collapse mb-3{{ default_sliders_state == 'open' ? ' show' }}\" id=\"advancedOptions\">
            {% endif %}

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            {{ t('Key block size:') }}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"{{ index.getKeyBlockSize() }}\">
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            {{ t('Index type:') }}
                            {{ show_mysql_docu('ALTER_TABLE') }}
                        </label>
                    </strong>
                </div>

              <select name=\"index[Index_type]\" id=\"select_index_type\">
                {% for index_type in ['', 'BTREE', 'HASH'] %}
                  <option value=\"{{ index_type }}\"{{ index.getType() == index_type ? ' selected' }}>{{ index_type }}</option>
                {% endfor %}
              </select>
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            {{ t('Parser:') }}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"{{ index.getParser() }}\">
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            {{ t('Comment:') }}
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"{{ index.getComment() }}\">
            </div>

            {% if default_sliders_state != 'disabled' %}
            </div>
            {% endif %}

        <div class=\"clearfloat\"></div>

        <table class=\"table align-middle\" id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        {{ t('Column') }}
                    </th>
                    <th>
                        {{ t('Size') }}
                    </th>
                </tr>
            </thead>
            {% set spatial_types = [
                'geometry',
                'point',
                'linestring',
                'polygon',
                'multipoint',
                'multilinestring',
                'multipolygon',
                'geomtrycollection'
            ] %}
            <tbody>
                {% for column in index.getColumns() %}
                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"{{ t('Drag to reorder') }}\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- {{ t('Ignore') }} --
                                </option>
                                {% for field_name, field_type in fields %}
                                    {% if (index.getChoice() != 'FULLTEXT'
                                            or field_type matches '/(char|text)/i')
                                        and (index.getChoice() != 'SPATIAL'
                                            or field_type in spatial_types) %}

                                        <option value=\"{{ field_name }}\"
                                            {%- if field_name == column.getName() %}
                                                selected
                                            {%- endif %}>
                                            {{ field_name }} [{{ field_type }}]
                                        </option>
                                    {% endif %}
                                {% endfor %}
                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"{{ index.getChoice() != 'SPATIAL' ?
                                    column.getSubPart() }}\">
                        </td>
                    </tr>
                {% endfor %}
                {% if add_fields > 0 %}
                    {% for i in range(1, add_fields) %}
                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"{{ t('Drag to reorder') }}\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- {{ t('Ignore') }} --</option>
                                    {% set j = 0 %}
                                    {% for field_name, field_type in fields %}
                                        {% if create_edit_table %}
                                            {% set col_index = field_type[1] %}
                                            {% set field_type = field_type[0] %}
                                        {% endif %}
                                        {% set j = j + 1 %}
                                        <option value=\"{{ col_index is defined ?
                                            col_index : field_name }}\"
                                            {{- j == i ? ' selected' }}>
                                            {{ field_name }} [{{ field_type }}]
                                        </option>
                                    {% endfor %}
                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\">
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input class=\"btn btn-secondary\" type=\"submit\"
                    id=\"add_fields\"
                    value=\"{{ t('Add %s column(s) to index')|format(1) }}\">
            </div>
        </div>
        </div>
    </div>
    {# The modal already has buttons to execute and preview SQL #}
    {%- if not create_edit_table -%}
    <div class=\"card-footer\">
        <button class=\"btn btn-primary\" type=\"submit\">{{ t('Go') }}</button>
        <button class=\"btn btn-secondary\" type=\"submit\" id=\"preview_index_frm\">{{ t('Preview SQL') }}</button>
    </div>
    {%- endif -%}
</form>
{% if is_from_nav %}
  {{ include('modals/preview_sql_modal.twig') }}
{% endif %}
", "table/index_form.twig", "/mnt/storage/phpmyadmin.git/release/phpMyAdmin-6.0+snapshot/resources/templates/table/index_form.twig");
    }
}

<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Core\\App' => $baseDir . '/core/App.php',
    'App\\Core\\Database\\Connection' => $baseDir . '/core/database/Connection.php',
    'App\\Core\\Database\\QueryBuilder' => $baseDir . '/core/database/QueryBuilder.php',
    'App\\Core\\Request' => $baseDir . '/core/Request.php',
    'App\\Core\\Router' => $baseDir . '/core/Router.php',
    'Attribut' => $baseDir . '/core/entities/Attribut.php',
    'AttributeController' => $baseDir . '/controllers/AttributeController.php',
    'ComposerAutoloaderInit7fd44013b5c8bd4d159ec066bb7f0ed6' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit7fd44013b5c8bd4d159ec066bb7f0ed6' => $vendorDir . '/composer/autoload_static.php',
    'Customer' => $baseDir . '/core/entities/Customer.php',
    'PagesController' => $baseDir . '/controllers/PagesController.php',
    'Product' => $baseDir . '/core/entities/Product.php',
    'ProductController' => $baseDir . '/controllers/ProductController.php',
    'Product_attribute' => $baseDir . '/core/entities/Product_attribute.php',
    'Smarty' => $baseDir . '/core/libs/Smarty/Smarty.class.php',
    'SmartyBC' => $baseDir . '/core/libs/Smarty/SmartyBC.class.php',
    'SmartyCompilerException' => $baseDir . '/core/libs/Smarty/sysplugins/smartycompilerexception.php',
    'SmartyException' => $baseDir . '/core/libs/Smarty/sysplugins/smartyexception.php',
    'SmartyPaginate' => $baseDir . '/core/libs/Smarty/SmartyPaginate.class.php',
    'Smarty_Autoloader' => $baseDir . '/core/libs/Smarty/Autoloader.php',
    'Smarty_CacheResource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_cacheresource.php',
    'Smarty_CacheResource_Custom' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_cacheresource_custom.php',
    'Smarty_CacheResource_KeyValueStore' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_cacheresource_keyvaluestore.php',
    'Smarty_Data' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_data.php',
    'Smarty_Internal_Block' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_block.php',
    'Smarty_Internal_CacheResource_File' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_cacheresource_file.php',
    'Smarty_Internal_CompileBase' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compilebase.php',
    'Smarty_Internal_Compile_Append' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_append.php',
    'Smarty_Internal_Compile_Assign' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_assign.php',
    'Smarty_Internal_Compile_Block' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_block.php',
    'Smarty_Internal_Compile_Block_Child' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_block_child.php',
    'Smarty_Internal_Compile_Block_Parent' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_block_parent.php',
    'Smarty_Internal_Compile_Blockclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_block.php',
    'Smarty_Internal_Compile_Break' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_break.php',
    'Smarty_Internal_Compile_Call' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_call.php',
    'Smarty_Internal_Compile_Capture' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_capture.php',
    'Smarty_Internal_Compile_CaptureClose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_capture.php',
    'Smarty_Internal_Compile_Child' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_child.php',
    'Smarty_Internal_Compile_Config_Load' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_config_load.php',
    'Smarty_Internal_Compile_Continue' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_continue.php',
    'Smarty_Internal_Compile_Debug' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_debug.php',
    'Smarty_Internal_Compile_Else' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Elseif' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Eval' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_eval.php',
    'Smarty_Internal_Compile_Extends' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_extends.php',
    'Smarty_Internal_Compile_For' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Forclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Foreach' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Foreachclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Foreachelse' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Forelse' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Function' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_function.php',
    'Smarty_Internal_Compile_Functionclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_function.php',
    'Smarty_Internal_Compile_If' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Ifclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Include' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_include.php',
    'Smarty_Internal_Compile_Include_Php' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_include_php.php',
    'Smarty_Internal_Compile_Insert' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_insert.php',
    'Smarty_Internal_Compile_Ldelim' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_ldelim.php',
    'Smarty_Internal_Compile_Make_Nocache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_make_nocache.php',
    'Smarty_Internal_Compile_Nocache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_nocache.php',
    'Smarty_Internal_Compile_Nocacheclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_nocache.php',
    'Smarty_Internal_Compile_Parent' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_parent.php',
    'Smarty_Internal_Compile_Private_Block_Plugin' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_block_plugin.php',
    'Smarty_Internal_Compile_Private_ForeachSection' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_foreachsection.php',
    'Smarty_Internal_Compile_Private_Function_Plugin' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_function_plugin.php',
    'Smarty_Internal_Compile_Private_Modifier' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_modifier.php',
    'Smarty_Internal_Compile_Private_Object_Block_Function' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_object_block_function.php',
    'Smarty_Internal_Compile_Private_Object_Function' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_object_function.php',
    'Smarty_Internal_Compile_Private_Php' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_php.php',
    'Smarty_Internal_Compile_Private_Print_Expression' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_print_expression.php',
    'Smarty_Internal_Compile_Private_Registered_Block' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_registered_block.php',
    'Smarty_Internal_Compile_Private_Registered_Function' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_registered_function.php',
    'Smarty_Internal_Compile_Private_Special_Variable' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_private_special_variable.php',
    'Smarty_Internal_Compile_Rdelim' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_rdelim.php',
    'Smarty_Internal_Compile_Section' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Sectionclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Sectionelse' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Setfilter' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_setfilter.php',
    'Smarty_Internal_Compile_Setfilterclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_setfilter.php',
    'Smarty_Internal_Compile_Shared_Inheritance' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_shared_inheritance.php',
    'Smarty_Internal_Compile_While' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_while.php',
    'Smarty_Internal_Compile_Whileclose' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_compile_while.php',
    'Smarty_Internal_Config_File_Compiler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_config_file_compiler.php',
    'Smarty_Internal_Configfilelexer' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_configfilelexer.php',
    'Smarty_Internal_Configfileparser' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_configfileparser.php',
    'Smarty_Internal_Data' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_data.php',
    'Smarty_Internal_Debug' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_debug.php',
    'Smarty_Internal_ErrorHandler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_errorhandler.php',
    'Smarty_Internal_Extension_Handler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_extension_handler.php',
    'Smarty_Internal_Method_AddAutoloadFilters' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_addautoloadfilters.php',
    'Smarty_Internal_Method_AddDefaultModifiers' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_adddefaultmodifiers.php',
    'Smarty_Internal_Method_Append' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_append.php',
    'Smarty_Internal_Method_AppendByRef' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_appendbyref.php',
    'Smarty_Internal_Method_AssignByRef' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_assignbyref.php',
    'Smarty_Internal_Method_AssignGlobal' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_assignglobal.php',
    'Smarty_Internal_Method_ClearAllAssign' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearallassign.php',
    'Smarty_Internal_Method_ClearAllCache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearallcache.php',
    'Smarty_Internal_Method_ClearAssign' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearassign.php',
    'Smarty_Internal_Method_ClearCache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearcache.php',
    'Smarty_Internal_Method_ClearCompiledTemplate' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearcompiledtemplate.php',
    'Smarty_Internal_Method_ClearConfig' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_clearconfig.php',
    'Smarty_Internal_Method_CompileAllConfig' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_compileallconfig.php',
    'Smarty_Internal_Method_CompileAllTemplates' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_compilealltemplates.php',
    'Smarty_Internal_Method_ConfigLoad' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_configload.php',
    'Smarty_Internal_Method_CreateData' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_createdata.php',
    'Smarty_Internal_Method_GetAutoloadFilters' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getautoloadfilters.php',
    'Smarty_Internal_Method_GetConfigVariable' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getconfigvariable.php',
    'Smarty_Internal_Method_GetConfigVars' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getconfigvars.php',
    'Smarty_Internal_Method_GetDebugTemplate' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getdebugtemplate.php',
    'Smarty_Internal_Method_GetDefaultModifiers' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getdefaultmodifiers.php',
    'Smarty_Internal_Method_GetGlobal' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getglobal.php',
    'Smarty_Internal_Method_GetRegisteredObject' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getregisteredobject.php',
    'Smarty_Internal_Method_GetStreamVariable' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_getstreamvariable.php',
    'Smarty_Internal_Method_GetTags' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_gettags.php',
    'Smarty_Internal_Method_GetTemplateVars' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_gettemplatevars.php',
    'Smarty_Internal_Method_Literals' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_literals.php',
    'Smarty_Internal_Method_LoadFilter' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_loadfilter.php',
    'Smarty_Internal_Method_LoadPlugin' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_loadplugin.php',
    'Smarty_Internal_Method_MustCompile' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_mustcompile.php',
    'Smarty_Internal_Method_RegisterCacheResource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registercacheresource.php',
    'Smarty_Internal_Method_RegisterClass' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerclass.php',
    'Smarty_Internal_Method_RegisterDefaultConfigHandler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerdefaultconfighandler.php',
    'Smarty_Internal_Method_RegisterDefaultPluginHandler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php',
    'Smarty_Internal_Method_RegisterDefaultTemplateHandler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php',
    'Smarty_Internal_Method_RegisterFilter' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerfilter.php',
    'Smarty_Internal_Method_RegisterObject' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerobject.php',
    'Smarty_Internal_Method_RegisterPlugin' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerplugin.php',
    'Smarty_Internal_Method_RegisterResource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_registerresource.php',
    'Smarty_Internal_Method_SetAutoloadFilters' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_setautoloadfilters.php',
    'Smarty_Internal_Method_SetDebugTemplate' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_setdebugtemplate.php',
    'Smarty_Internal_Method_SetDefaultModifiers' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_setdefaultmodifiers.php',
    'Smarty_Internal_Method_UnloadFilter' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unloadfilter.php',
    'Smarty_Internal_Method_UnregisterCacheResource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unregistercacheresource.php',
    'Smarty_Internal_Method_UnregisterFilter' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unregisterfilter.php',
    'Smarty_Internal_Method_UnregisterObject' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unregisterobject.php',
    'Smarty_Internal_Method_UnregisterPlugin' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unregisterplugin.php',
    'Smarty_Internal_Method_UnregisterResource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_method_unregisterresource.php',
    'Smarty_Internal_Nocache_Insert' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_nocache_insert.php',
    'Smarty_Internal_ParseTree' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree.php',
    'Smarty_Internal_ParseTree_Code' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_code.php',
    'Smarty_Internal_ParseTree_Dq' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_dq.php',
    'Smarty_Internal_ParseTree_DqContent' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_dqcontent.php',
    'Smarty_Internal_ParseTree_Tag' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_tag.php',
    'Smarty_Internal_ParseTree_Template' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_template.php',
    'Smarty_Internal_ParseTree_Text' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_parsetree_text.php',
    'Smarty_Internal_Resource_Eval' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_eval.php',
    'Smarty_Internal_Resource_Extends' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_extends.php',
    'Smarty_Internal_Resource_File' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_file.php',
    'Smarty_Internal_Resource_Php' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_php.php',
    'Smarty_Internal_Resource_Registered' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_registered.php',
    'Smarty_Internal_Resource_Stream' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_stream.php',
    'Smarty_Internal_Resource_String' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_resource_string.php',
    'Smarty_Internal_Runtime_CacheModify' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_cachemodify.php',
    'Smarty_Internal_Runtime_CacheResourceFile' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_cacheresourcefile.php',
    'Smarty_Internal_Runtime_Capture' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_capture.php',
    'Smarty_Internal_Runtime_CodeFrame' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_codeframe.php',
    'Smarty_Internal_Runtime_FilterHandler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_filterhandler.php',
    'Smarty_Internal_Runtime_Foreach' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_foreach.php',
    'Smarty_Internal_Runtime_GetIncludePath' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_getincludepath.php',
    'Smarty_Internal_Runtime_Inheritance' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_inheritance.php',
    'Smarty_Internal_Runtime_Make_Nocache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_make_nocache.php',
    'Smarty_Internal_Runtime_TplFunction' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_tplfunction.php',
    'Smarty_Internal_Runtime_UpdateCache' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_updatecache.php',
    'Smarty_Internal_Runtime_UpdateScope' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_updatescope.php',
    'Smarty_Internal_Runtime_WriteFile' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_runtime_writefile.php',
    'Smarty_Internal_SmartyTemplateCompiler' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_smartytemplatecompiler.php',
    'Smarty_Internal_Template' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_template.php',
    'Smarty_Internal_TemplateBase' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_templatebase.php',
    'Smarty_Internal_TemplateCompilerBase' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_templatecompilerbase.php',
    'Smarty_Internal_Templatelexer' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_templatelexer.php',
    'Smarty_Internal_Templateparser' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_templateparser.php',
    'Smarty_Internal_TestInstall' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_testinstall.php',
    'Smarty_Internal_Undefined' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_undefined.php',
    'Smarty_Resource' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_resource.php',
    'Smarty_Resource_Custom' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_resource_custom.php',
    'Smarty_Resource_Recompiled' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_resource_recompiled.php',
    'Smarty_Resource_Uncompiled' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_resource_uncompiled.php',
    'Smarty_Security' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_security.php',
    'Smarty_Template_Cached' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_template_cached.php',
    'Smarty_Template_Compiled' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_template_compiled.php',
    'Smarty_Template_Config' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_template_config.php',
    'Smarty_Template_Resource_Base' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_template_resource_base.php',
    'Smarty_Template_Source' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_template_source.php',
    'Smarty_Undefined_Variable' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_undefined_variable.php',
    'Smarty_Variable' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_variable.php',
    'TPC_yyStackEntry' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_configfileparser.php',
    'TP_yyStackEntry' => $baseDir . '/core/libs/Smarty/sysplugins/smarty_internal_templateparser.php',
);

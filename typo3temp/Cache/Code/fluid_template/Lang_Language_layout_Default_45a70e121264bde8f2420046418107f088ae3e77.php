<?php
class FluidCache_Lang_Language_layout_Default_45a70e121264bde8f2420046418107f088ae3e77 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\ContainerViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['enableJumpToUrl'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments1['enableClickMenu'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments1['loadPrototype'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments1['loadScriptaculous'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments1['loadExtJs'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('0');
// Rendering Boolean node
$arguments1['loadJQuery'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Array
$array2 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments3 = array();
$arguments3['path'] = 'StyleSheet/LangModule.css';
$arguments3['extensionName'] = NULL;
$arguments3['absolute'] = false;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper5 = $self->getViewHelper('$viewHelper5', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper5->setArguments($arguments3);
$viewHelper5->setRenderingContext($renderingContext);
$viewHelper5->setRenderChildrenClosure($renderChildrenClosure4);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array2['0'] = $viewHelper5->initializeArgumentsAndRender();
$arguments1['addCssFiles'] = $array2;
// Rendering Array
$array6 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'Contrib/jquery.dataTables-1.9.4.min.js';
$arguments7['extensionName'] = NULL;
$arguments7['absolute'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array6['0'] = $viewHelper9->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'JavaScript/LangModule.js';
$arguments10['extensionName'] = NULL;
$arguments10['absolute'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$array6['1'] = $viewHelper12->initializeArgumentsAndRender();
$arguments1['addJsFiles'] = $array6;
// Rendering Array
$array13 = array();
$array13['0'] = 'flashmessage.error';
$array13['1'] = 'flashmessage.information';
$array13['2'] = 'flashmessage.success';
$array13['3'] = 'flashmessage.multipleErrors';
$array13['4'] = 'flashmessage.updateComplete';
$array13['5'] = 'flashmessage.canceled';
$arguments1['addJsInlineLabels'] = $array13;
$arguments1['pageTitle'] = '';
$arguments1['scriptaculousModule'] = '';
$arguments1['loadExtJsTheme'] = true;
$arguments1['extJsAdapter'] = '';
$arguments1['enableExtJsDebug'] = false;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
	<div class="typo3-fullDoc">

		<div id="typo3-docheader">
			<div class="typo3-docheader-functions">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$arguments16 = array();
$arguments16['table'] = NULL;
$arguments16['field'] = '';
$arguments16['iconOnly'] = false;
$arguments16['styleAttributes'] = '';
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '
				</div>
				<div class="right">
				</div>
			</div>
			<div class="typo3-docheader-buttons">
				<div class="left">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['section'] = 'iconButtons';
$arguments19['partial'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output15 .= $viewHelper21->initializeArgumentsAndRender();

$output15 .= '
				</div>
				<div class="right">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper
$arguments22 = array();
$arguments22['getVars'] = array (
);
$arguments22['setVars'] = array (
);
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\ShortcutViewHelper

$output15 .= $viewHelper24->initializeArgumentsAndRender();

$output15 .= '
				</div>
			</div>
		</div>

		<div id="typo3-docbody">
			<div id="typo3-inner-docbody">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments25 = array();
$arguments25['section'] = 'content';
$arguments25['partial'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['optional'] = false;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper

$output15 .= $viewHelper27->initializeArgumentsAndRender();

$output15 .= '
			</div>
		</div>

	</div>
';
return $output15;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\CMS\Lang\ViewHelpers\Be\ContainerViewHelper');
$viewHelper28->setArguments($arguments1);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\CMS\Lang\ViewHelpers\Be\ContainerViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

return $output0;
}


}
#1382106703    8408      
### Include JS/CSS : system generated file, please donot add or modify ###
<f:if condition="{privacyConfigs.jsPathExternal}"><f:if condition="{privacyConfigs.inFooter}"><f:then>
page.includeJSFooter{<f:for each="{privacyConfigs.jsPathExternal}" as="jsPathList" iteration="Iteration1"><f:if condition="{jsPathList.path}">
	cookieIncludeJs00{Iteration1.cycle} = {jsPathList.path}</f:if></f:for>
}</f:then><f:else>
page.includeJS{<f:for each="{privacyConfigs.jsPathExternal}" as="jsPathList" iteration="Iteration1"><f:if condition="{jsPathList.path}">
	cookieIncludeJs00{Iteration1.cycle} = {jsPathList.path}</f:if></f:for>
}</f:else></f:if></f:if>
<f:if condition="{privacyConfigs.cssPathExternal}">
page.includeCSS{<f:for each="{privacyConfigs.cssPathExternal}" as="cssPathList" iteration="Iteration1"><f:if condition="{cssPathList.path}">
	cookieIncludeCss00{Iteration1.cycle} = {cssPathList.path}</f:if></f:for>
}</f:if>
# Change Log

## [Unreleased](https://github.com/Victoire/victoire/tree/HEAD)

[Full Changelog](https://github.com/Victoire/victoire/compare/1.3.5...HEAD)

## [1.3.5](https://github.com/Victoire/victoire/tree/1.3.5) (2015-11-25)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.3.4...1.3.5)

**Closed issues:**

- \[Insight\] The composer.lock is not up to date. - in composer.lock, line 0 [\#242](https://github.com/Victoire/victoire/issues/242)
- Generate viewReference when a new business entity is add [\#33](https://github.com/Victoire/victoire/issues/33)

**Merged pull requests:**

- Add empty value in tags fields [\#282](https://github.com/Victoire/victoire/pull/282) ([vincent-chapron](https://github.com/vincent-chapron))
- fix cssHash for virtual BP and expose victoire\_core\_page\_show\_by\_id route [\#281](https://github.com/Victoire/victoire/pull/281) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Render pages in a modal layout if request is Ajax [\#280](https://github.com/Victoire/victoire/pull/280) ([gregumo](https://github.com/gregumo))
- Call WidgetDataWarmer warm method after WidgetMap build when necessary [\#279](https://github.com/Victoire/victoire/pull/279) ([gregumo](https://github.com/gregumo))
- Add isset check on viewReferencePage for manual call to vic\_link\_url [\#278](https://github.com/Victoire/victoire/pull/278) ([gregumo](https://github.com/gregumo))
- Remove orderBy duplicata and manage orderBy for association fields in QueryHelper [\#277](https://github.com/Victoire/victoire/pull/277) ([gregumo](https://github.com/gregumo))
- add Disqus in the list of widgets that can display articles [\#276](https://github.com/Victoire/victoire/pull/276) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Refactor EntityManager injections to avoid conflict between WidgetCss command and WidgetMapDataWarmer [\#275](https://github.com/Victoire/victoire/pull/275) ([gregumo](https://github.com/gregumo))
- Add Slider Nav in the list of the widgets that can display article [\#274](https://github.com/Victoire/victoire/pull/274) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Restore good version for incenteev/composer-parameter-handler [\#273](https://github.com/Victoire/victoire/pull/273) ([gregumo](https://github.com/gregumo))

## [1.3.4](https://github.com/victoire/victoire/tree/1.3.4) (2015-11-13)
[Full Changelog](https://github.com/victoire/victoire/compare/1.3.3...1.3.4)

**Merged pull requests:**

- WidgetDataWarmer : check if link exist when entity has LinkTrait [\#272](https://github.com/Victoire/victoire/pull/272) ([gregumo](https://github.com/gregumo))
- use a choice\_tree form type for category-filter [\#270](https://github.com/Victoire/victoire/pull/270) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Widget Rendering Refactor [\#268](https://github.com/Victoire/victoire/pull/268) ([gregumo](https://github.com/gregumo))

## [1.3.3](https://github.com/Victoire/victoire/tree/1.3.3) (2015-11-04)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.3.2...1.3.3)

**Merged pull requests:**

- Bugfix/duplicata of settings [\#267](https://github.com/Victoire/victoire/pull/267) ([vincent-chapron](https://github.com/vincent-chapron))

## [1.3.2](https://github.com/Victoire/victoire/tree/1.3.2) (2015-11-04)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.3.1...1.3.2)

**Merged pull requests:**

- do not throw an exception when domain name is not configured but fall… [\#266](https://github.com/Victoire/victoire/pull/266) ([paulandrieux](https://github.com/paulandrieux))

## [1.3.1](https://github.com/Victoire/victoire/tree/1.3.1) (2015-11-04)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.3.0...1.3.1)

**Merged pull requests:**

- Feature/update 2.7 [\#265](https://github.com/Victoire/victoire/pull/265) ([paulandrieux](https://github.com/paulandrieux))

## [1.3.0](https://github.com/Victoire/victoire/tree/1.3.0) (2015-11-04)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.2.2...1.3.0)

**Merged pull requests:**

- Composer require text-widget and button-widget ~1.3.0 [\#264](https://github.com/Victoire/victoire/pull/264) ([gregumo](https://github.com/gregumo))
- Pattern rename in template, vic\_business\_property\_picker Extension and backendName [\#260](https://github.com/Victoire/victoire/pull/260) ([gregumo](https://github.com/gregumo))
- Bugfix/update article choose default template [\#258](https://github.com/Victoire/victoire/pull/258) ([vincent-chapron](https://github.com/vincent-chapron))
- Change temporarily umask for 777 chmod and allow www-data user manipu… [\#257](https://github.com/Victoire/victoire/pull/257) ([gregumo](https://github.com/gregumo))
- add a method to get Template inheritors [\#256](https://github.com/Victoire/victoire/pull/256) ([paulandrieux](https://github.com/paulandrieux))

## [1.2.2](https://github.com/Victoire/victoire/tree/1.2.2) (2015-10-27)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.2.1...1.2.2)

**Merged pull requests:**

- Modify travis config - output only critical and error requests only after failure [\#254](https://github.com/Victoire/victoire/pull/254) ([gregumo](https://github.com/gregumo))
- Replace ViewCssWarmer by WidgetCssGenerateCommand [\#253](https://github.com/Victoire/victoire/pull/253) ([gregumo](https://github.com/gregumo))
- Reintegrated the Vic Annotation [\#252](https://github.com/Victoire/victoire/pull/252) ([talbotseb](https://github.com/talbotseb))
- Fix wording for seo behat tests [\#251](https://github.com/Victoire/victoire/pull/251) ([paulandrieux](https://github.com/paulandrieux))
- Added a newline character to end text files [\#250](https://github.com/Victoire/victoire/pull/250) ([talbotseb](https://github.com/talbotseb))
- drop database in travis script [\#248](https://github.com/Victoire/victoire/pull/248) ([paulandrieux](https://github.com/paulandrieux))
- Applied fixes from StyleCI [\#246](https://github.com/Victoire/victoire/pull/246) ([talbotseb](https://github.com/talbotseb))
- Applied fixes from StyleCI [\#240](https://github.com/Victoire/victoire/pull/240) ([talbotseb](https://github.com/talbotseb))
- Remove eval function from form.js \(data-refreshOnChange\) to avoid dou… [\#239](https://github.com/Victoire/victoire/pull/239) ([gregumo](https://github.com/gregumo))
- Generate CSS file for each View instead of adding style markup for each Widget [\#238](https://github.com/Victoire/victoire/pull/238) ([gregumo](https://github.com/gregumo))
- SEOBundle modification [\#235](https://github.com/Victoire/victoire/pull/235) ([talbotseb](https://github.com/talbotseb))

## [1.2.1](https://github.com/Victoire/victoire/tree/1.2.1) (2015-10-20)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.2.0...1.2.1)

**Implemented enhancements:**

- Fix/vicms 711 add en es translations [\#224](https://github.com/Victoire/victoire/pull/224) ([talbotseb](https://github.com/talbotseb))

**Merged pull requests:**

- allow to exclude unpublished article for most read [\#237](https://github.com/Victoire/victoire/pull/237) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- prefix bootstrap carousel events with vic [\#236](https://github.com/Victoire/victoire/pull/236) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- remove double pipe [\#234](https://github.com/Victoire/victoire/pull/234) ([paulandrieux](https://github.com/paulandrieux))
- a BT can be restricted to the author of it's business entity [\#233](https://github.com/Victoire/victoire/pull/233) ([paulandrieux](https://github.com/paulandrieux))
- Fix/vicms 711 add en es translations [\#232](https://github.com/Victoire/victoire/pull/232) ([talbotseb](https://github.com/talbotseb))
- Added more translation in MediaBundle [\#231](https://github.com/Victoire/victoire/pull/231) ([talbotseb](https://github.com/talbotseb))
- fix broken en xliff [\#230](https://github.com/Victoire/victoire/pull/230) ([lenybernard](https://github.com/lenybernard))
- improve widget style generation indentation [\#229](https://github.com/Victoire/victoire/pull/229) ([lenybernard](https://github.com/lenybernard))
- notify appventus on slack room for each travis build [\#228](https://github.com/Victoire/victoire/pull/228) ([lenybernard](https://github.com/lenybernard))
- Applied fixes from StyleCI [\#227](https://github.com/Victoire/victoire/pull/227) ([lenybernard](https://github.com/lenybernard))
- Fix/widget command generation [\#226](https://github.com/Victoire/victoire/pull/226) ([lenybernard](https://github.com/lenybernard))
- enable elast search for Pages \(see the friendsofvictoire/search-widget\) [\#225](https://github.com/Victoire/victoire/pull/225) ([lenybernard](https://github.com/lenybernard))
- Applied fixes from StyleCI [\#223](https://github.com/Victoire/victoire/pull/223) ([lenybernard](https://github.com/lenybernard))
- fix getter for layout\(Business Template\) [\#221](https://github.com/Victoire/victoire/pull/221) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Bugfix/page deletion [\#220](https://github.com/Victoire/victoire/pull/220) ([paulandrieux](https://github.com/paulandrieux))
- Modify ReceiverProperty annotation by adding required property [\#219](https://github.com/Victoire/victoire/pull/219) ([gregumo](https://github.com/gregumo))
- add tests for seo [\#218](https://github.com/Victoire/victoire/pull/218) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Bugfix/blog tags [\#217](https://github.com/Victoire/victoire/pull/217) ([paulandrieux](https://github.com/paulandrieux))
- allow date widget to display article and fix seo update [\#216](https://github.com/Victoire/victoire/pull/216) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- use an option to set links available [\#215](https://github.com/Victoire/victoire/pull/215) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Bugfix/unlink route generation [\#214](https://github.com/Victoire/victoire/pull/214) ([paulandrieux](https://github.com/paulandrieux))
- Use EntityManager in BusinessPageHelper to get correct entity name [\#213](https://github.com/Victoire/victoire/pull/213) ([gregumo](https://github.com/gregumo))
- if homepage, do not insert an empty array value cause it will generat… [\#212](https://github.com/Victoire/victoire/pull/212) ([paulandrieux](https://github.com/paulandrieux))
- if persisted entity is not allowed in template, clean its viewReferen… [\#211](https://github.com/Victoire/victoire/pull/211) ([paulandrieux](https://github.com/paulandrieux))
- rename window.Select2 to window.vicSelect2 to avoid conflicts  [\#210](https://github.com/Victoire/victoire/pull/210) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Add placeholder for route and route parameters fields [\#208](https://github.com/Victoire/victoire/pull/208) ([vincent-chapron](https://github.com/vincent-chapron))
- use it if element index is stored in  data attribute [\#207](https://github.com/Victoire/victoire/pull/207) ([paulandrieux](https://github.com/paulandrieux))
- Scrutinizer Auto-Fixes [\#206](https://github.com/Victoire/victoire/pull/206) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- change onDelete strategy for StyleTraits background fields [\#205](https://github.com/Victoire/victoire/pull/205) ([lenybernard](https://github.com/lenybernard))
- add a test to fix null id case in widget unlink action [\#204](https://github.com/Victoire/victoire/pull/204) ([lenybernard](https://github.com/lenybernard))
- fix behat test [\#203](https://github.com/Victoire/victoire/pull/203) ([paulandrieux](https://github.com/paulandrieux))
- Bugfix/duplicate url management [\#202](https://github.com/Victoire/victoire/pull/202) ([paulandrieux](https://github.com/paulandrieux))
- Tag has a relation on blog. Use it in the article form to give blog's… [\#201](https://github.com/Victoire/victoire/pull/201) ([paulandrieux](https://github.com/paulandrieux))
- place the blog supression button in each blog parameters instead of m… [\#200](https://github.com/Victoire/victoire/pull/200) ([paulandrieux](https://github.com/paulandrieux))
- image and category are not required for an Article [\#199](https://github.com/Victoire/victoire/pull/199) ([paulandrieux](https://github.com/paulandrieux))
- article image can be set to null [\#198](https://github.com/Victoire/victoire/pull/198) ([paulandrieux](https://github.com/paulandrieux))
- add missing action when article settings is called in novalidate [\#197](https://github.com/Victoire/victoire/pull/197) ([paulandrieux](https://github.com/paulandrieux))
- use FormData object to send dat of the widget form if enctype is "multipart/form-dat" [\#196](https://github.com/Victoire/victoire/pull/196) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Bugfix/article settings [\#195](https://github.com/Victoire/victoire/pull/195) ([paulandrieux](https://github.com/paulandrieux))
- Bugfix/bt loose widget [\#194](https://github.com/Victoire/victoire/pull/194) ([paulandrieux](https://github.com/paulandrieux))
- fix the check of deletedAt column [\#193](https://github.com/Victoire/victoire/pull/193) ([paulandrieux](https://github.com/paulandrieux))
- Error message on WidgetManager and data-refreshOnChange bugfix [\#192](https://github.com/Victoire/victoire/pull/192) ([gregumo](https://github.com/gregumo))
- close twig tag [\#191](https://github.com/Victoire/victoire/pull/191) ([paulandrieux](https://github.com/paulandrieux))
- Bugfix/travis dump log [\#190](https://github.com/Victoire/victoire/pull/190) ([paulandrieux](https://github.com/paulandrieux))
- Bugfix/blog categories [\#189](https://github.com/Victoire/victoire/pull/189) ([paulandrieux](https://github.com/paulandrieux))
- Fix/clean virtualviews [\#188](https://github.com/Victoire/victoire/pull/188) ([lenybernard](https://github.com/lenybernard))
- if a BE is deleted, exclude it from allowed entities [\#187](https://github.com/Victoire/victoire/pull/187) ([paulandrieux](https://github.com/paulandrieux))

## [1.2.0](https://github.com/Victoire/victoire/tree/1.2.0) (2015-09-16)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.1.0...1.2.0)

**Merged pull requests:**

- Make ReceiverProperty optionnal and use NotBlank Constraint to throw Exception if not defined [\#186](https://github.com/Victoire/victoire/pull/186) ([gregumo](https://github.com/gregumo))
- Fix/vicms 658 bepp and article urls generation [\#184](https://github.com/Victoire/victoire/pull/184) ([paulandrieux](https://github.com/paulandrieux))
- change relation between Business entities and Entity proxy, manty to … [\#183](https://github.com/Victoire/victoire/pull/183) ([vincent-chapron](https://github.com/vincent-chapron))
- Bugfix/compatibility refresh on change and link type [\#182](https://github.com/Victoire/victoire/pull/182) ([vincent-chapron](https://github.com/vincent-chapron))
- \[VICMS-676\] ID collision [\#181](https://github.com/Victoire/victoire/pull/181) ([paulandrieux](https://github.com/paulandrieux))
- Feature/add background in modal style [\#180](https://github.com/Victoire/victoire/pull/180) ([vincent-chapron](https://github.com/vincent-chapron))
- redactor didn't work with refresh on change [\#179](https://github.com/Victoire/victoire/pull/179) ([vincent-chapron](https://github.com/vincent-chapron))
- add childrenSlot column [\#178](https://github.com/Victoire/victoire/pull/178) ([lenybernard](https://github.com/lenybernard))
- Feature/refactor views management [\#176](https://github.com/Victoire/victoire/pull/176) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- remove base $http config to not always do XMLHttpRequest for ajax wit… [\#175](https://github.com/Victoire/victoire/pull/175) ([lenybernard](https://github.com/lenybernard))
- Fix/page build on find page by reference [\#174](https://github.com/Victoire/victoire/pull/174) ([lenybernard](https://github.com/lenybernard))
- Fix/widget form active tab [\#173](https://github.com/Victoire/victoire/pull/173) ([lenybernard](https://github.com/lenybernard))
- use BusinessEntity::id instead name and rename variable from entityName to businessEntityId [\#172](https://github.com/Victoire/victoire/pull/172) ([lenybernard](https://github.com/lenybernard))

## [1.1.0](https://github.com/Victoire/victoire/tree/1.1.0) (2015-08-12)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.0.1...1.1.0)

**Closed issues:**

- bug background-image - subdirectory [\#84](https://github.com/Victoire/victoire/issues/84)

**Merged pull requests:**

- Feature/refactor annotation driver [\#171](https://github.com/Victoire/victoire/pull/171) ([lenybernard](https://github.com/lenybernard))
- Feature/use file cache instead of apc [\#170](https://github.com/Victoire/victoire/pull/170) ([lenybernard](https://github.com/lenybernard))
- Fix urls for Business entity pages [\#169](https://github.com/Victoire/victoire/pull/169) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Scrutinizer Auto-Fixes [\#168](https://github.com/Victoire/victoire/pull/168) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Feature/refactor annotation driver [\#167](https://github.com/Victoire/victoire/pull/167) ([lenybernard](https://github.com/lenybernard))
- Remove BEP automatically if the BE is deleted [\#166](https://github.com/Victoire/victoire/pull/166) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Build widget forms with mode to use the correct form name when handle the request [\#165](https://github.com/Victoire/victoire/pull/165) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Move modernizr.custom.js from victoire-head injector to its own injector [\#164](https://github.com/Victoire/victoire/pull/164) ([gregumo](https://github.com/gregumo))
- Add condition if date exist else return empty string [\#163](https://github.com/Victoire/victoire/pull/163) ([vincent-chapron](https://github.com/vincent-chapron))
- Add orderBy, fix and add behat tests [\#162](https://github.com/Victoire/victoire/pull/162) ([gregumo](https://github.com/gregumo))
- set visible on front at 0 on delete [\#161](https://github.com/Victoire/victoire/pull/161) ([vincent-chapron](https://github.com/vincent-chapron))
- add rand function for doctrine [\#159](https://github.com/Victoire/victoire/pull/159) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- add strict mode for blog filters [\#158](https://github.com/Victoire/victoire/pull/158) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- protect array if widgetType is not register in victoire\_core.widgets [\#157](https://github.com/Victoire/victoire/pull/157) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fixbug/add order by query [\#156](https://github.com/Victoire/victoire/pull/156) ([vincent-chapron](https://github.com/vincent-chapron))
- Allow absolute path on twig getPath function [\#155](https://github.com/Victoire/victoire/pull/155) ([gregumo](https://github.com/gregumo))
- guess required for widgets field in entity mode [\#154](https://github.com/Victoire/victoire/pull/154) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- prevent use :currentEntity for a widgetQuery inside a businessEntityP… [\#153](https://github.com/Victoire/victoire/pull/153) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix parameter in request for filter [\#152](https://github.com/Victoire/victoire/pull/152) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Add an event when an article is created [\#151](https://github.com/Victoire/victoire/pull/151) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- remove angular library from victoire-ngApp assetic injector [\#150](https://github.com/Victoire/victoire/pull/150) ([lenybernard](https://github.com/lenybernard))
- Fix/hierarchical business entity [\#148](https://github.com/Victoire/victoire/pull/148) ([lenybernard](https://github.com/lenybernard))
- Fix bugs on viewReference generation, on blog route and on behat tests [\#147](https://github.com/Victoire/victoire/pull/147) ([gregumo](https://github.com/gregumo))
- fix assets case in path [\#146](https://github.com/Victoire/victoire/pull/146) ([paulandrieux](https://github.com/paulandrieux))
- display checkbox inline-block [\#145](https://github.com/Victoire/victoire/pull/145) ([paulandrieux](https://github.com/paulandrieux))
- Feature/vicms 664 refactor ng slot controller [\#144](https://github.com/Victoire/victoire/pull/144) ([lenybernard](https://github.com/lenybernard))
- Feature/vicms 297 use business params in seo and page settings for both bep and bepp [\#143](https://github.com/Victoire/victoire/pull/143) ([lenybernard](https://github.com/lenybernard))
- Fix contextual blog settings unavailable [\#142](https://github.com/Victoire/victoire/pull/142) ([lenybernard](https://github.com/lenybernard))
- Check uri to be sure to not boot kernel if we guess it's a file resource [\#141](https://github.com/Victoire/victoire/pull/141) ([lenybernard](https://github.com/lenybernard))
- VICMS-661 [\#140](https://github.com/Victoire/victoire/pull/140) ([clekos](https://github.com/clekos))
- ViewHelper and BlogFilterListener fix [\#139](https://github.com/Victoire/victoire/pull/139) ([gregumo](https://github.com/gregumo))
- Feature/vicms 660 fetch asynchronous widget batch action [\#138](https://github.com/Victoire/victoire/pull/138) ([lenybernard](https://github.com/lenybernard))
- Scrutinizer Auto-Fixes [\#137](https://github.com/Victoire/victoire/pull/137) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Use viewReferences to find best patternId and add method to AnalyticsBundle [\#136](https://github.com/Victoire/victoire/pull/136) ([gregumo](https://github.com/gregumo))
- Feature/vicms 654 asynchronous widgets slot issue [\#135](https://github.com/Victoire/victoire/pull/135) ([lenybernard](https://github.com/lenybernard))
- fix update to regenerate correct references [\#134](https://github.com/Victoire/victoire/pull/134) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/vicms 641 asynchronous widgets [\#133](https://github.com/Victoire/victoire/pull/133) ([lenybernard](https://github.com/lenybernard))
- fix query [\#132](https://github.com/Victoire/victoire/pull/132) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- define path to autoload.php [\#131](https://github.com/Victoire/victoire/pull/131) ([paulandrieux](https://github.com/paulandrieux))
- create a resize function for behat tests [\#130](https://github.com/Victoire/victoire/pull/130) ([paulandrieux](https://github.com/paulandrieux))
- Retrieve only allowed entitiesPage for its BEP during viewsReferences generation [\#129](https://github.com/Victoire/victoire/pull/129) ([gregumo](https://github.com/gregumo))
- add cascade delete between business entities and EntityProxy [\#128](https://github.com/Victoire/victoire/pull/128) ([paulandrieux](https://github.com/paulandrieux))
- add github oauth token in environment variable [\#127](https://github.com/Victoire/victoire/pull/127) ([paulandrieux](https://github.com/paulandrieux))
- Bugfix/clean virtual pages from cache [\#126](https://github.com/Victoire/victoire/pull/126) ([paulandrieux](https://github.com/paulandrieux))
- store main current page in CurrentViewHelper in order to reuse it for… [\#125](https://github.com/Victoire/victoire/pull/125) ([paulandrieux](https://github.com/paulandrieux))
- Behat test for BEP generation after BusinessEntity creation  [\#124](https://github.com/Victoire/victoire/pull/124) ([paulandrieux](https://github.com/paulandrieux))
- when build a pattern reference, set patternId instead of viewId [\#122](https://github.com/Victoire/victoire/pull/122) ([paulandrieux](https://github.com/paulandrieux))
- fix bad usage of EventSubscriber [\#121](https://github.com/Victoire/victoire/pull/121) ([paulandrieux](https://github.com/paulandrieux))
- use listing query to get correct values for filters [\#120](https://github.com/Victoire/victoire/pull/120) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Use patternId instead of viewId for pattern entities in ViewHelper [\#119](https://github.com/Victoire/victoire/pull/119) ([gregumo](https://github.com/gregumo))
- fix blogfilter listener [\#118](https://github.com/Victoire/victoire/pull/118) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix Blog settings form [\#117](https://github.com/Victoire/victoire/pull/117) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- exclude unpublished articles [\#116](https://github.com/Victoire/victoire/pull/116) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- move basepage logic to views [\#112](https://github.com/Victoire/victoire/pull/112) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix trash icon position [\#110](https://github.com/Victoire/victoire/pull/110) ([paulandrieux](https://github.com/paulandrieux))
- Text modifications / Bundle Translation [\#107](https://github.com/Victoire/victoire/pull/107) ([talbotseb](https://github.com/talbotseb))

## [1.0.1](https://github.com/Victoire/victoire/tree/1.0.1) (2015-05-29)
[Full Changelog](https://github.com/Victoire/victoire/compare/1.0.0...1.0.1)

**Merged pull requests:**

- add css rules to keep fontAwesome font in sidebar menu [\#111](https://github.com/Victoire/victoire/pull/111) ([paulandrieux](https://github.com/paulandrieux))
- eval ajax content after insert it in dom [\#109](https://github.com/Victoire/victoire/pull/109) ([paulandrieux](https://github.com/paulandrieux))
- Fix variable assignment typo [\#108](https://github.com/Victoire/victoire/pull/108) ([paulandrieux](https://github.com/paulandrieux))
- add blog filter listener and fix page subscriber and business link [\#106](https://github.com/Victoire/victoire/pull/106) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix nelmio alice dependency [\#104](https://github.com/Victoire/victoire/pull/104) ([lenybernard](https://github.com/lenybernard))
- Modify resolveFromDomain in LocalResolver [\#103](https://github.com/Victoire/victoire/pull/103) ([gregumo](https://github.com/gregumo))
- fix load of widgetItems [\#101](https://github.com/Victoire/victoire/pull/101) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Process definition for Victoire's collaboration [\#99](https://github.com/Victoire/victoire/pull/99) ([talbotseb](https://github.com/talbotseb))
- Add Widget Items capacity to be read [\#97](https://github.com/Victoire/victoire/pull/97) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix/vicms-602 widget position after create [\#96](https://github.com/Victoire/victoire/pull/96) ([lenybernard](https://github.com/lenybernard))
- Fix widget position after create [\#95](https://github.com/Victoire/victoire/pull/95) ([lenybernard](https://github.com/lenybernard))
- Fix shouldPrecede assert [\#94](https://github.com/Victoire/victoire/pull/94) ([lenybernard](https://github.com/lenybernard))
- Add transitional style for input\_media display with and without modal [\#93](https://github.com/Victoire/victoire/pull/93) ([gregumo](https://github.com/gregumo))
- Feature/vicms 581 behat reboot [\#91](https://github.com/Victoire/victoire/pull/91) ([lenybernard](https://github.com/lenybernard))
- CS fixes [\#90](https://github.com/Victoire/victoire/pull/90) ([paulandrieux](https://github.com/paulandrieux))
- remove watch\_view\_cache and CS [\#89](https://github.com/Victoire/victoire/pull/89) ([paulandrieux](https://github.com/paulandrieux))
- fix indentation [\#88](https://github.com/Victoire/victoire/pull/88) ([paulandrieux](https://github.com/paulandrieux))
- kick watch\_view\_cache references [\#87](https://github.com/Victoire/victoire/pull/87) ([paulandrieux](https://github.com/paulandrieux))
- remove obsolete ViewCacheListener [\#86](https://github.com/Victoire/victoire/pull/86) ([paulandrieux](https://github.com/paulandrieux))
- refactor getViewsReferences to read the cache if already computed [\#85](https://github.com/Victoire/victoire/pull/85) ([paulandrieux](https://github.com/paulandrieux))
- Use "asset\(\)" rather than a direct call to file [\#83](https://github.com/Victoire/victoire/pull/83) ([Akiletour](https://github.com/Akiletour))
- re-order style rules and re-implement rule for a different icon to widge... [\#81](https://github.com/Victoire/victoire/pull/81) ([LoicGoyet](https://github.com/LoicGoyet))
- Changes in the setup file [\#80](https://github.com/Victoire/victoire/pull/80) ([talbotseb](https://github.com/talbotseb))
- Indication of the following setup verification : APC enable in CLI mode [\#79](https://github.com/Victoire/victoire/pull/79) ([talbotseb](https://github.com/talbotseb))
- remove usage of bootstrap tooltip and replace it with a pure css solutio... [\#76](https://github.com/Victoire/victoire/pull/76) ([LoicGoyet](https://github.com/LoicGoyet))
- Some test fixes for travis [\#75](https://github.com/Victoire/victoire/pull/75) ([paulandrieux](https://github.com/paulandrieux))
- text modification uri\>url [\#74](https://github.com/Victoire/victoire/pull/74) ([talbotseb](https://github.com/talbotseb))
- add automate tests script [\#73](https://github.com/Victoire/victoire/pull/73) ([paulandrieux](https://github.com/paulandrieux))
- $attr should be passed as reference to be updated [\#72](https://github.com/Victoire/victoire/pull/72) ([paulandrieux](https://github.com/paulandrieux))
- fix js which update widget-modal after error on submit [\#71](https://github.com/Victoire/victoire/pull/71) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Scrutinizer Auto-Fixes [\#70](https://github.com/Victoire/victoire/pull/70) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Fix/delete widget [\#69](https://github.com/Victoire/victoire/pull/69) ([lenybernard](https://github.com/lenybernard))
- Fix/blog form settings locale [\#68](https://github.com/Victoire/victoire/pull/68) ([LoicGoyet](https://github.com/LoicGoyet))
- Fix/printed widget style [\#67](https://github.com/Victoire/victoire/pull/67) ([LoicGoyet](https://github.com/LoicGoyet))

## [1.0.0](https://github.com/Victoire/victoire/tree/1.0.0) (2015-04-22)
[Full Changelog](https://github.com/Victoire/victoire/compare/0.1.3...1.0.0)

**Closed issues:**

- \[Insight\] Absolute path constants \_\_DIR\_\_ and \_\_FILE\_\_ should not be used - in Bundle/CoreBundle/Cache/ApcCache.php, line 22 [\#28](https://github.com/Victoire/victoire/issues/28)
- Page creation - only "en" locale available [\#27](https://github.com/Victoire/victoire/issues/27)
- Refactoriser la méthode settingsActions [\#25](https://github.com/Victoire/victoire/issues/25)
- \[Insight\] Unused use statement should be avoided - in Bundle/…/CacheWarmer/I18nCacheDriver.php, line 8 [\#24](https://github.com/Victoire/victoire/issues/24)
- \[Insight\] Unused use statement should be avoided - in Bundle/…/CacheWarmer/I18nCacheDriver.php, line 7 [\#23](https://github.com/Victoire/victoire/issues/23)
- \[Insight\] Unused use statement should be avoided - in Bundle/…/CacheWarmer/I18nCacheDriver.php, line 6 [\#22](https://github.com/Victoire/victoire/issues/22)
- \[Insight\] Unused use statement should be avoided - in Bundle/…/Command/UpdateToI18nCommand.php, line 7 [\#21](https://github.com/Victoire/victoire/issues/21)
- \[Insight\] Unused method, property, variable or parameter - in Bundle/…/Command/UpdateToI18nCommand.php, line 91 [\#20](https://github.com/Victoire/victoire/issues/20)
- \[Insight\] Unused method, property, variable or parameter - in Bundle/…/Command/UpdateToI18nCommand.php, line 63 [\#19](https://github.com/Victoire/victoire/issues/19)
- \[Insight\] Unused method, property, variable or parameter - in Bundle/CoreBundle/Helper/ViewHelper.php, line 284 [\#18](https://github.com/Victoire/victoire/issues/18)
- \[Insight\] Boolean should be compared strictly - in Bundle/…/Controller/TemplateController.php, line 139 [\#16](https://github.com/Victoire/victoire/issues/16)
- \[Insight\] Boolean should be compared strictly - in Bundle/I18nBundle/Entity/BaseI18n.php, line 43 [\#15](https://github.com/Victoire/victoire/issues/15)
- \[Insight\] The Symfony Dependency Injection Container should not be passed as an argument - in Bundle/…/Listener/LocaleListener.php, line 20 [\#14](https://github.com/Victoire/victoire/issues/14)
- \[Insight\] The Symfony Dependency Injection Container should not be passed as an argument - in Bundle/…/Translation/Translator.php, line 25 [\#13](https://github.com/Victoire/victoire/issues/13)
- \[Insight\] The Symfony Dependency Injection Container should not be passed as an argument - in Bundle/…/Resolver/DomainResolver.php, line 20 [\#12](https://github.com/Victoire/victoire/issues/12)
- \[Insight\] exit\(\) and die\(\) functions should be avoided - in Bundle/…/Command/UpdateToI18nCommand.php, line 31 [\#9](https://github.com/Victoire/victoire/issues/9)
- \[Insight\] The Symfony Dependency Injection Container should not be passed as an argument - in Bundle/…/Translation/Translator.php, line 70 [\#8](https://github.com/Victoire/victoire/issues/8)
- \[Insight\] The Symfony Dependency Injection Container should not be passed as an argument - in Bundle/…/Translation/Translator.php, line 13 [\#7](https://github.com/Victoire/victoire/issues/7)
- \[Insight\] Missing use statement should be avoided - in Bundle/…/Controller/I18nController.php, line 41 [\#4](https://github.com/Victoire/victoire/issues/4)
- Move this into the BusinessEntityBundle [\#2](https://github.com/Victoire/victoire/issues/2)

**Merged pull requests:**

- fix cache for pages and added some pages tests [\#66](https://github.com/Victoire/victoire/pull/66) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Fix/behat test [\#65](https://github.com/Victoire/victoire/pull/65) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/improve stylize modal [\#64](https://github.com/Victoire/victoire/pull/64) ([LoicGoyet](https://github.com/LoicGoyet))
- Update setup.md [\#63](https://github.com/Victoire/victoire/pull/63) ([ternel](https://github.com/ternel))
- database typo [\#62](https://github.com/Victoire/victoire/pull/62) ([estheban](https://github.com/estheban))
- Scrutinizer Auto-Fixes [\#61](https://github.com/Victoire/victoire/pull/61) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Scrutinizer Auto-Fixes [\#59](https://github.com/Victoire/victoire/pull/59) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Refactor viclink \[BC Break\] [\#58](https://github.com/Victoire/victoire/pull/58) ([lenybernard](https://github.com/lenybernard))
- Feature/business entity interface [\#57](https://github.com/Victoire/victoire/pull/57) ([LoicGoyet](https://github.com/LoicGoyet))
- Feature/create resources bundle [\#56](https://github.com/Victoire/victoire/pull/56) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/site map [\#55](https://github.com/Victoire/victoire/pull/55) ([LoicGoyet](https://github.com/LoicGoyet))
- Update README.md [\#54](https://github.com/Victoire/victoire/pull/54) ([talbotseb](https://github.com/talbotseb))
- Feature/site map [\#53](https://github.com/Victoire/victoire/pull/53) ([LoicGoyet](https://github.com/LoicGoyet))
- Feature/blog [\#52](https://github.com/Victoire/victoire/pull/52) ([LoicGoyet](https://github.com/LoicGoyet))
- Feature/blog [\#51](https://github.com/Victoire/victoire/pull/51) ([LoicGoyet](https://github.com/LoicGoyet))
- Bugfix/use vic jquery [\#50](https://github.com/Victoire/victoire/pull/50) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- fix translations after merge [\#49](https://github.com/Victoire/victoire/pull/49) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/blog [\#48](https://github.com/Victoire/victoire/pull/48) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/login [\#47](https://github.com/Victoire/victoire/pull/47) ([LoicGoyet](https://github.com/LoicGoyet))
- kaede-input Feature/login [\#46](https://github.com/Victoire/victoire/pull/46) ([LoicGoyet](https://github.com/LoicGoyet))
- surprise !  [\#45](https://github.com/Victoire/victoire/pull/45) ([LoicGoyet](https://github.com/LoicGoyet))
- Scrutinizer Auto-Fixes [\#44](https://github.com/Victoire/victoire/pull/44) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Scrutinizer Auto-Fixes [\#43](https://github.com/Victoire/victoire/pull/43) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Scrutinizer Auto-Fixes [\#42](https://github.com/Victoire/victoire/pull/42) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- Scrutinizer Auto-Fixes [\#41](https://github.com/Victoire/victoire/pull/41) ([scrutinizer-auto-fixer](https://github.com/scrutinizer-auto-fixer))
- merge upstream [\#40](https://github.com/Victoire/victoire/pull/40) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Feature/integration [\#39](https://github.com/Victoire/victoire/pull/39) ([LoicGoyet](https://github.com/LoicGoyet))
- Fix/some style adjustments [\#38](https://github.com/Victoire/victoire/pull/38) ([clekos](https://github.com/clekos))
- Feature/sitemap change priority [\#37](https://github.com/Victoire/victoire/pull/37) ([lenybernard](https://github.com/lenybernard))
- Feature/vicms 326 style mode baby [\#36](https://github.com/Victoire/victoire/pull/36) ([lenybernard](https://github.com/lenybernard))
- Refactor bottom navbar [\#35](https://github.com/Victoire/victoire/pull/35) ([lenybernard](https://github.com/lenybernard))
- Feature/blog isolation [\#34](https://github.com/Victoire/victoire/pull/34) ([lenybernard](https://github.com/lenybernard))
- Support inheritence in BusinessEntities [\#32](https://github.com/Victoire/victoire/pull/32) ([Charlie-Lucas](https://github.com/Charlie-Lucas))
- Bugfix/i18n [\#31](https://github.com/Victoire/victoire/pull/31) ([poneymagique](https://github.com/poneymagique))
- Merge travis initialization [\#29](https://github.com/Victoire/victoire/pull/29) ([lenybernard](https://github.com/lenybernard))
- Feature/vicms 83 [\#26](https://github.com/Victoire/victoire/pull/26) ([poneymagique](https://github.com/poneymagique))
- i18n [\#10](https://github.com/Victoire/victoire/pull/10) ([poneymagique](https://github.com/poneymagique))
- Feature/vicms 440 viclink analytics tracking [\#6](https://github.com/Victoire/victoire/pull/6) ([lenybernard](https://github.com/lenybernard))
- fix a bug on view due to old code [\#5](https://github.com/Victoire/victoire/pull/5) ([poneymagique](https://github.com/poneymagique))
- Fix/vicms 397 widgetmap positionreference [\#1](https://github.com/Victoire/victoire/pull/1) ([paulandrieux](https://github.com/paulandrieux))

## [0.1.3](https://github.com/Victoire/victoire/tree/0.1.3) (2014-05-06)
[Full Changelog](https://github.com/Victoire/victoire/compare/0.1.0...0.1.3)

## [0.1.0](https://github.com/Victoire/victoire/tree/0.1.0) (2014-04-29)


\* *This Change Log was automatically generated by [github_changelog_generator](https://github.com/skywinder/Github-Changelog-Generator)*

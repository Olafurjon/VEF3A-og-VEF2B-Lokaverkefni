# VEF3A-og-VEF2B-Lokaverkefni

Haldið verður áfram með verkefni 6 úr VEF3A og verður hún betrumbætt og bætt inn meira efni <br>
Heimasíðuna er að finna hér: http://178.62.25.29/ eða hér http://www.sterkari.eu/

# Um Heimasíðuna

Þetta er heimasíða sem hefur þróast í svona ræktar heimasíðu þar sem þú getur sótt um aðgang og loggað þig inn og þá hefuru aðgang að svona basic upplýsingum og æfingum ásamt því getur þú sótt um að fá þjálfara og færðu þá sérsniðin æfingarprógröm

# Tæknilegi hlutinn

Heimasíðan byggist á MINI3 Frameworkinu með routing og sessions ásamt því að nota Bootstrap fyrir vefútlit, hvatningarorðin og æfingarnar og þjálfaralistinn er lesinn úr JSON skrám síðan verður notað Jquery validation á login formin og til að generate-a æfingaplönin frá gagnarunni, einnig mun æfingaplanasíðan vera gerð meira mobile-friendly þannig að hægt verði að logga inn æfingarnar og sjá hvernig manni gekk síðan, eflaust mun eitthvað meira þróast síðan. í lokinn verður útlit og snyrtilegheit lagað þannig að við uppbyggingu getur verið að form eða videoplayer sé kannski ekki á ideal stað

# Staða

Progress fært úr Lokaverkefni frá repository VEF3A/Lokaverkefni hingað til að hafa sér Repo fyrir lokaverkefni <br>
Vefur kominn upp og aðeins lagað forsíðuna ásamt því fengið virkni í að það poppi upp flash player þegar smellt er á æfingarflísarnar en það hoppi ekki með þig á youtube <br>
Nýskráning og innskráning virkar ásamt því að þú getur uploadað profile mynd og breytt upplýsingum (hinsvegar er stored cache vandamál með profile mynd það þarf stundum að cleara stored images úr cachei til að laga það að hún breytist við upload)<br>
Skrá út takkinn virkar til að skrá út,l það er kominn upp profile síða og æfingar síða þannig eftirfarandi slóðir virka<br>
<li>http://178.62.25.29/</li>
<li>http://sterkari.eu/</li>
<li>http://178.62.25.29/aefingar</li>
<li>http://178.62.25.29/profile</li>
<li>http://178.62.25.29/nyskraning</li>
<li>http://178.62.25.29/innskraning</li>
<br> 24/4/17 - Fundið til upplýsingar og settar í gagnagrunninn til að vinna með, æfingardagar osfrv <br>
28/4/17 - Núna birtast default æfingarnar á síðunni undir æfingar, einnig er bætt við flettara með jquery þannig að það skiptist um æfingar "í realtime" ef þú ýtir á Bak, fætur, etc, eftir á að bæta virkni við í töflu<br>
5/5/5 - Hef gleymt að logga nokkrar breytingar en smá updates sem ég man eftir, Issue með að valin æfing highlighte-aðist ekki, vandamáli var síðan bara mjög basic og kjánalega auðvelt þannig vill helst ekki tjá mig um hvað var að, popup video komin á æfingasíðuna þannig að þú þarft ekki að verða redirectaður á Youtube þau bara opnast í andlitið á þér, profile pic ætti(hefur verið að virka 100% hjá mér) alltaf að endurnýja profilemyndina ef þú ert að uploada nýrri, bætti við timestamp á endann þannig að alltaf nýjasta ætti að koma, það var vandmál með að þar sem þetta heitir alltaf bara profile.jpg þá var það store-að í cachinu án uppfærsla. það sem verður á döfinni síðan er að bæta inn þjálfarasíðunni, bæta inn custom æfingm fyrir þjálfara og að sækja um þjálfara, vonandi síðan error prevention og útlitslaganir.<br>
06/05/2017 - Þjálfara síðan kominn upp, getur smellt á hafa samband þá opnast svona messagebox þar sem þú getur talað við hann, eftir á að implimenta, formið sett upp með fallegri virkni, einnig lagað jquery validationið fyrir nýskráningar, einnig þegar þú smellir á hafa samband kemur nafn þjálfarans sjálkrafa innaní boxið <br>
06/05/2017 - http://www.sterkari.eu/ var sett mér tilgamans á domainið sterkari.eu, þannig hún er aðgengileg af veraldarvefnum gegnum hana, hefði kannski átt að eyða meiri tíma í að hugsa nafnið en fór með það fyrsta sem mér datt í hug... <br>
07/05/17 - Lykilorð eru núna encryptuð og koma aldrei fram í plaintext, lagað hefur verið hvernig formin eru, gefið flottari útlit, er að lenda í leiðinlegu útlitsveseni með innskráningarsíðuna, lagað var hvernig hlutir eins og vitlaust lykilorð og óþarfa error síðu redirections koma fram
07/05/17 - Ajax beiðni sem athugar hvort að notandi sem er loggaður inn eigi ólesinn póst þá birtist það í navbarnum með upplýsingar um fjölda pósta sem hann á, enn á eftir að útfæra það að hægt sé að lesa póstinn á heimasíðunni samt...

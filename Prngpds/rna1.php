<HTML><HEAD><TITLE>Untitled Document</TITLE><LINK 
href="rna_ar/estilo.css" type=text/css rel=STYLESHEET>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<META content="MSHTML 6.00.2600.0" name=GENERATOR></HEAD>
<BODY bgColor=#ffffff>
<TABLE width="100%" border=0>
  <TBODY>
  <TR>
    <TD></A></TD>
    <TD></A></TD>
    <TD></A></TD>
    <TD></A></TD>
    <TD></A></TD></TR></TBODY></TABLE>
<DIV align=center>
<P class=centerazul>URL http://gpds.uv.es/gpds/nn</P></DIV>
<P class=texto><FONT color=#003366 size=4><B>REDES NEURONALES 
ARTIFICIALES.</B></FONT></P>
<P class=texto><BR></P>
<TABLE width="100%" border=0>
  <TBODY>
  <TR>
    <TD class=textoblanco bgColor=#6699cc height=25>I. 
  INTRODUCCI�N.</TD></TR></TBODY></TABLE>
<P class=texto>El uso de las redes neuronales artificiales en diferentes campos 
del conocimiento (control, procesado de la se�al, sistemas expertos, predicci�n 
en series temporales, etc) han sufrido un crecimiento exponencial en los �ltimos 
a�os [1],[2],[3]. Este n�mero tan elevado se debe se explica por su aplicaci�n 
en problemas de clasificaci�n, modelizaci�n y predicci�n. <BR>&nbsp; </P>
<P class=texto>Las redes neuronales son preferibles a otros m�todos matem�ticos 
cuando se presentan las siguientes caracter�sticas:</P>
<OL>
  <LI>
  <P class=texto>Es muy dif�cil encontrar las reglas que definen la variable a 
  modelizar en relaci�n a las variables independientes consideradas para el 
  modelo.</P>
  <LI>
  <P class=texto>Los datos son imprecisos o contienen perturbaciones 
  estad�sticas (ruido).</P>
  <LI>
  <P class=texto>El problema necesita para ser definido un gran n�mero de 
  variables dependientes (presenta una alta dimensionalidad).</P>
  <LI>
  <P class=texto>El modelo a resolver es no lineal.</P>
  <LI>
  <P class=texto>Se dispone de un gran n�mero de datos.</P>
  <LI>
  <P class=texto>El entorno de trabajo es variable. </P></LI></OL>
<P class=texto>Sin embargo, a pesar de suaplicabilidad y su potencia,&nbsp; 
existe un cierto recelo a su uso ya que se consideran "cajas negras"&nbsp; que 
dan buenos resultados por �casualidad�. Esta impresi�n no es real por cuanto 
que: </P>
<UL>
  <LI>
  <P class=texto>&nbsp;Existen libros de redes neuronales escritos por 
  matem�ticos estad�sticos de gran prestigio internacional [4],[5].</P>
  <LI>
  <P class=texto>&nbsp;En libros de an�lisis multivariante cl�sicos se da como 
  camino a seguir las redes neuronales [6]</P>
  <LI>
  <P class=texto>&nbsp;Programas inform�ticos usualmente usados en an�lisis de 
  datos, por ejemplo el famoso y ampliamente extendido SPSS, incluyen m�dulos de 
  redes neuronales [7].</P>
  <LI>
  <P class=texto>&nbsp;Existen multitud de demostraciones de la convergencia de 
  los valores de salida de un tipo de red neuronal, el perceptr�n multicapa, 
  hacia los valores definidos por el Teorema de Bayes; herramienta de uso com�n 
  en problemas de clasificaci�n [8].</P></LI></UL>
<TABLE width="100%" border=0>
  <TBODY>
  <TR>
    <TD class=textoblanco bgColor=#6699cc height=25>II. DESCRIPCI�N DE LAS 
      REDES NEURONALES. </TD></TR></TBODY></TABLE>
<P class=textoazul2>II. 1 Arquitectura de las redes </P>
<P class=texto>En teor�a de redes neuronales podemos distinguir tres niveles en 
su arquitectura: </P>
<OL>
  <LI>
  <P class=texto>Microestructura. Hace referencia a los elementos m�s peque�os 
  de las redes neuronales: las neuronas.</P>
  <LI>
  <P class=texto>Mesoestructura. Resultado de la combinaci�n de las neuronas. 
  Ser�an las redes neuronales propiamente dichas.</P>
  <LI>
  <P class=texto>Macroestructura. Combinaci�n de redes, se podr�a denominar a 
  este nivel �comit� de expertos�. Existen diferentes tipos de combinaci�n : 
  paralelo, jer�rquica, etc. dependiendo de la aplicaci�n que se quiera 
  implementar. </P></LI></OL>
<P class=textoazul2>II.1.1 Microestructura. </P>
<P class=texto><BR>Es el elemento b�sico de la red: la neurona, que puede tener 
diferentes formas dependiendo de la aplicaci�n: </P>
<DIV align=center><IMG height=142 src="rna_ar/Image2.gif" 
width=399><BR>Figura 1. Esquema de una neurona. </DIV>
<P class=texto>En general una neurona tendr� los siguientes elementos: </P>
<UL class=texto>
  <LI>
  <P class=texto>Entradas. Son las datos a utilizar por la neurona. Pueden ser 
  las variables de entrada, si la neurona est� en la capa de entrada del 
  sistema, o las salidas de otras neuronas. Si alguna de las entradas a la 
  neurona es una salida de dicha neurona estar�amos hablando de una neurona 
  recurrente o con memoria.</P>
  <LI>Conexiones.&nbsp; Denominados pesos en teor�a de redes neuronales. Son los 
  factores multiplicativos de las entradas. Existe un peso adicional denominado 
  umbral que tiene como entrada 1. El significado de este peso es englobar el 
  umbral que aparece en la figura 1. Este umbral define el valor para el cual la 
  neurona se activa, es decir:<BR>
  <DIV align=center><IMG height=51 src="rna_ar/Image3.gif" width=335> 
  </DIV><BR>si tomamos el peso w0 como �umbral entonces la anterior expresi�n 
  queda como: <BR>
  <DIV align=center><IMG height=51 src="rna_ar/Image4.gif" width=331> 
  </DIV>
  <P class=texto>El proceso de aprendizaje de una red radica en la modificaci�n 
  de estos pesos de acuerdo con un algoritmo determinado. </P>
  <LI>
  <P class=texto>Funci�n de activaci�n. Elemento b�sico en la neurona. Esta 
  funci�n le da a la neurona su car�cter no lineal y, por lo tanto, ampl�a el 
  campo de aplicaci�n frente a otros m�todos cl�sicos de an�lisis de datos. 
  Existen muchos tipos de funci�n; algunos de los m�s usuales son: sigmoide, 
  tangente hiperb�lica, funci�n signo, etc.</P>
  <LI>
  <P class=texto>Una funci�n de estado. Define el estado actual de la neurona en 
  funci�n de las entradas actuales, de la salida y del estado anterior. 
  Normalmente esta funci�n es la funci�n identidad.</P></LI></UL>
<P class=texto>&nbsp;Si combinamos la estructura de una neurona con una de las 
funciones de activaci�n m�s usada, la sigmoide, aparece una relaci�n matem�tica 
habitualmente utilizada como prueba diagn�stica: la regresi�n log�stica. En 
efecto, este m�todo matem�tico consiste en modelizar la probabilidad de un 
determinado evento de acuerdo a la siguiente expresi�n:</P>
<DIV align=center><IMG height=58 src="rna_ar/Image6.gif" width=356> </DIV>
<P class=texto>&nbsp;donde x<SUB>n</SUB> son las diferentes variables 
independientes de las que depende nuestro problema. </P>
<P class=texto>&nbsp;Los par�metros a determinar son los par�metros wn que son 
equivalentes a los pesos de una neurona. As� pues, cuando se utiliza el m�todo 
de regresi�n log�stica se est� usando una red constituida por una sola neurona, 
evidentemente este modelo tan sencillo se puede mejorar. Al estudiar este 
modelo, representado por una neurona, se pueden sacar importantes conclusiones. 
En efecto, el caso m�s sencillo es clasificar dos grupos (A y B) usando la 
probabilidad definida por el modelo de regresi�n log�stica. En este modelo se 
define un umbral de tal forma que si el valor de P(x) es superior a ese umbral 
pertenece a la clase A y si no a la B. Esta condici�n se transforma en que el 
exponente sea mayor que cierta cantidad, es decir: <BR>
<DIV align=center><IMG height=51 src="rna_ar/Image7.gif" width=376> </DIV>
<P class=texto>&nbsp;Veamos qu� significa esto con un caso simple: supongamos 
que nuestro problema s�lo depende de dos variables, entonces el caso definido 
anteriormente queda como: </P>
<DIV align=center><IMG height=51 src="rna_ar/Image7.jpg" width=376 
border=0> </DIV>
<P class=texto>&nbsp;La frontera entre las dos clases vendr� definida por los 
ejemplos que cumplen la siguiente condici�n: </P>&nbsp; 
<DIV align=center><IMG height=24 src="rna_ar/Image9.jpg" 
width=168></DIV><BR>
<P class=texto>&nbsp;La ecuaci�n anterior es la ecuaci�n de una recta. Por 
tanto, el modelo de regresi�n log�stica s�lo permite clasificar correctamente 
elementos que sean linealmente separables; se trata de un modelo muy limitado. 
Se puede aumentar su potencia mediante transformaciones no lineales de las 
entradas pero se requiere un conocimiento a priori del problema que no siempre 
se tiene. La manera de mejorar este modelo es combinar estos elementos de 
proceso en estructuras m�s grandes: las redes neuronales, pasamos pues a otro 
nivel: la mesoestructura. <BR></P>
<P class=textoazul2>&nbsp;II.1.2 Mesoestructura. </P>
<P class=texto>&nbsp;La combinaci�n de las neuronas se puede realizar de muchas 
formas diferentes. En esta combinaci�n se habla de capas y dependiendo del 
n�mero de �stas y de la conexi�n entre ellas tenemos diferentes clasificaciones. 
�stas quedan expuestas en la siguiente tabla. </P>
<DIV align=center><IMG height=169 src="rna_ar/Image10.gif" width=584> 
</DIV>
<P class=texto><BR>&nbsp;A la hora de definir la arquitectura de una red 
neuronal, normalmente se hace referencia a las tres caracter�sticas. Continuando 
con nuestro ejemplo de clasificaci�n, veamos como mejora nuestro clasificador si 
combinamos varias neuronas. Supongamos que queremos dise�ar un clasificador para 
el ejemplo definido por los siguientes valores: </P>
<P class=texto>Ejemplo de sistema clasificador:<BR>
<DIV align=center>
<TABLE width="11%" align=center border=0>
  <TBODY>
  <TR class=textoblanco bgColor=#6699cc>
    <TD width="6%">X1</TD>
    <TD width="7%">X2</TD>
    <TD width="87%">Clase</TD></TR>
  <TR>
    <TD width="6%">0</TD>
    <TD width="7%">0</TD>
    <TD width="87%">A</TD></TR>
  <TR>
    <TD width="6%">0</TD>
    <TD width="7%">1</TD>
    <TD width="87%">B</TD></TR>
  <TR>
    <TD width="6%">1</TD>
    <TD width="7%">0</TD>
    <TD width="87%">B</TD></TR>
  <TR>
    <TD width="6%">1</TD>
    <TD width="7%">1</TD>
    <TD width="87%">A</TD></TR></TBODY></TABLE></DIV>
<P class=texto>&nbsp;Para simplificar, usaremos como funci�n de activaci�n la 
funci�n signo y clasificaremos como A si la salida del sistema es&nbsp; -1 y 
clase B si es 1. Si se representa gr�ficamente el conjunto de entrada se tiene: 
</P>&nbsp; 
<DIV align=center><IMG height=195 src="rna_ar/Image11.jpg" 
width=350><BR>Esquema de los patrones a clasificar. </DIV>
<P class=texto>Para este ejemplo, la mejor soluci�n de clasificaci�n que podr�a 
plantear un sistema de regresi�n log�stica ser�a el representado por la l�nea 
recta de la figura que dista mucho de ser �ptimo. Veamos c�mo resuelven este 
problema las redes neuronales. Con la funci�n de activaci�n signo, ver tabla 1, 
y las clases as� definidas el problema tiene como una posible soluci�n la red 
definida por la siguiente figura (los pesos umbrales tienen como entrada +1): 
</P>
<P class=texto>
<DIV align=center>
<DIV align=center></DIV><IMG height=175 src="rna_ar/Image12.jpg" 
width=260> <BR>Red para resolver el problema planteado.</DIV>
<P class=texto>&nbsp; As�, si por ejemplo x1 y x2 tienen valor 0 la salida del 
sistema debe ser �1. Las salidas para las neuronas A, OA,&nbsp; y B, OB, ser�n: 
</P>
<DIV align=center><IMG height=48 src="rna_ar/Image13.jpg" width=300> 
</DIV>
<P class=texto>&nbsp;Por otra parte la salida de la neurona C, OC, vendr� 
definida por: </P>
<DIV align=center><IMG height=41 src="rna_ar/Image14.jpg" width=285> 
</DIV>
<P class=texto>que es la salida que se busca. 
<P class=texto>
<P class=texto>&nbsp;Por tanto la combinaci�n de diferentes neuronas, en forma 
de redes, amplia su capacidad de proceso de datos. Sin embargo, en determinadas 
situaciones esto no es suficiente y se necesitan combinar redes entre s�, 
pasando al siguiente nivel denominado macroestructura. </P>
<P class=textoazul2>&nbsp;II.1.3 Macroestructura.</P>
<P class=texto>&nbsp;Existen problemas donde una combinaci�n de redes da un 
mejor comportamiento que usar una sola red. Esta combinaci�n puede ser en 
paralelo (todas tienen el mismo peso), en serie (la salida de una red es la 
entrada a otra mayor), jer�rquica (en problemas de clasificaci�n, existen redes 
m�s expertas que otras), etc. o variaciones de ellas dependiendo de la 
aplicaci�n concreta. Un ejemplo sencillo que ayudar� a entender la ventaja de 
combinar redes es el problema de modelizar la funci�n valor absoluto que viene 
definida en la expresi�n: </P>
<P class=texto>
<DIV align=center><IMG height=48 src="rna_ar/Image15.jpg" width=155> 
</DIV>
<P class=texto>&nbsp;De la definici�n se aprecia que existen dos zonas 
claramente diferenciadas en el domino de x, los valores negativos y los 
positivos. En ese caso se pueden definir dos redes, especializadas en cada zona 
y combinarlas para definir la funci�n total. Otro ejemplo, ahora en 
clasificaci�n, donde se deduce f�cilmente la utilidad de combinar diferentes 
redes, es en aquellos problemas donde los datos se agrupan en determinadas zonas 
del espacio formado por las variables de entrada. Si se especializa cada red, 
para cada zona, se obtendr� un resultado �ptimo. <BR>&nbsp;En este apartado si 
bien se ha comprobado la posible utilizaci�n de las redes neuronales, existe una 
cuesti�n todav�a no resuelta �c�mo se determina el valor de los pesos?. Es decir 
cuales son los valores que relacionan las neuronas entre si y por tanto, los que 
definen la estructura y comportamiento de la red neuronal. Para el c�lculo de 
los pesos se usaran algoritmos de aprendizaje que se definen en las redes 
neuronales. </P>
<P class=textoazul2>&nbsp;II.2 Algoritmos de aprendizaje.</P>
<P class=texto>&nbsp;Los procedimientos para determinar las conexiones entre 
neuronas reciben el nombre de algoritmos de aprendizaje ya que es en los pesos 
donde reside el �conocimiento� de una red. Su clasificaci�n junto con dos de las 
aplicaciones m�s frecuentes [1]: </P>&nbsp; 
<P class=texto>
<DIV align=center><IMG height=213 src="rna_ar/Image17.jpg" width=498> 
<BR>Tipos de aprendizaje y posibles aplicaciones. </DIV>
<P class=texto>&nbsp;Una primera gran diferenciaci�n del aprendizaje est� en si 
es o no. La diferencia estriba en que el supervisado dispone de informaci�n 
sobre la salida objetivo o deseada de la red, hecho que no ocurre en el no 
supervisado. Dentro del supervisado hay otra divisi�n que se establece en 
funci�n del valor exacto de la salida deseada, aprendizaje por correcci�n, y si 
s�lo se dispone de informaci�n l�gica (es o no la se�al deseada) estamos en un 
aprendizaje por refuerzo. <BR>&nbsp;La forma de proceder en los algoritmos de 
aprendizaje supervisado es definir una funci�n objetivo o error a minimizar. 
Esta funci�n ser� siempre una funci�n mon�tona creciente de la diferencia entre 
la se�al deseada - se�al que deber�a dar la red - y la salida proporcionada por 
la red. El problema es, pues, de optimizaci�n: b�squeda del m�nimo de una 
funci�n y aqu� aparecen una serie de procedimientos de b�squeda que, 
generalmente, se dividen en dos grupos: </P>
<UL>
  <LI>
  <P class=texto>M�todos de b�squeda global. Buscan el m�nimo global de la 
  funci�n objetivo. Proporcionan los pesos que dan el valor m�s peque�o de dicha 
  funci�n sobre todo su dominio. Entre estos m�todos se pueden destacar los 
  procedimientos de b�squeda basados en algoritmos gen�ticos.</P>
  <LI>
  <P class=texto>M�todos de b�squeda local. Buscan el m�nimo m�s cercano de la 
  funci�n objetivo en relaci�n al estado inicial de los pesos al comenzar dichos 
  algoritmos.&nbsp; L�gicamente dan unos pesos peores que los m�todos anteriores 
  pero son algoritmos mucho m�s r�pidos en la obtenci�n de la soluci�n. Entre 
  estos m�todos se encuentran todos los basados en descenso por gradiente, 
  gradiente conjugados, quasi-Newton, etc.</P></LI></UL>
<P class=texto>La&nbsp; forma habitual de entrenar estos sistemas supervisados 
es dividir los ejemplos disponibles en dos conjuntos: entrenamiento y 
generalizaci�n, normalmente en una relaci�n 2/3 a 1/3. En el �mbito cl�nico, 
m�dico y farmace�tico, se conoce al conjunto de generalizaci�n como conjunto de 
validaci�n. Con el primer conjunto de datos se entrena la red, esto es, se 
ajustan las conexiones de la red o pesos, y con el segundo se comprueba su 
capacidad de generalizaci�n. En este marco hay que tener en cuenta que una de la 
principales caracter�sticas de las redes neuronales, que las hacen especiales 
frente a otros m�todos, es su capacidad de generalizaci�n; es decir, ante 
entradas desconocidas son capaces de dar salidas aproximadas a las deseadas. 
</P>
<P class=textoazul2>&nbsp;II.3 El perceptr�n multicapa.</P>
<P class=texto>&nbsp;El perceptr�n multicapa es la red m�s usada en la 
actualidad ya que se puede aplicar en problemas de clasificaci�n, modelizaci�n, 
predicci�n en series temporales, control discreto, etc. Es una red multicapa, en 
la mayor�a de las aplicaciones no recurrente, y que tiene un aprendizaje 
supervisado por correcci�n o minimizaci�n del error [1]. La primera capa recibe 
el nombre de capa de entrada, la �ltima capa de salida y las intermedias se 
denominan ocultas, la figura 7 muestra la arquitectura de un perceptr�n 
multicapa tipo: <BR></P>
<P class=texto>
<DIV align=center><IMG height=180 src="rna_ar/Image18.jpg" 
width=265><BR>Esquema de un perceptr�n multicapa. </DIV>
<P class=texto>La funci�n objetivo habitualmente usada es la suma de los errores 
al cuadrado: </P>
<P class=texto>
<DIV align=center><IMG height=47 src="rna_ar/Image19.jpg" width=140> 
</DIV>
<P class=texto>&nbsp;Donde el sub�ndice �p� hace referencia al patr�n o muestra 
de entrenamiento y el super�ndice �s� la neurona de salida. Por N se entiende el 
n�mero total de neuronas en la capa de salida y por P el de patrones (Ej. n�mero 
de sujetos a clasificar). <BR>&nbsp;El algoritmo m�s com�nmente usado es un 
procedimiento de b�squeda local, del tipo de descenso por gradiente, que queda 
resumido en los siguientes pasos: </P>
<P class=texto>
<DIV align=center><IMG height=459 src="rna_ar/Image21.jpg" width=458> 
</DIV>
<P class=texto>&nbsp;Este algoritmo, a pesar de su sencillez ha dado muy buenos 
resultados en muchos tipos de aplicaciones, siendo uno de los m�ximos 
�culpables� de la expansi�n de las redes neuronales. </P>
<TABLE width="100%" border=0>
  <TBODY>
  <TR>
    <TD class=textoblanco bgColor=#6699cc height=25>II. 
  CONCLUSIONES.</TD></TR></TBODY></TABLE>
<P class=texto>En este trabajo se exponen brevemente las bases de una disciplina 
que ha sufrido una producci�n cient�fica en los �ltimos a�os. De forma 
sorprendente, estos m�todos, ampliamente usados en algunos campos del 
conocimiento, no han sido aplicados en otros por falsos mitos aplicados a estos 
elementos. Se podr�a acabar con una afirmaci�n que puede impulsar a la 
utilziaci�n de estos m�todos: "todos aquellos resultados obtenidos con an�lisis 
multivariante o regresi�n log�stica ser�n como m�nimo igualados por una red 
neuronal". La anterior afirmaci�n se bassa en el hecho que, un an�lisis 
multivariante es una neurona con funci�n de activaci�n lineal y una regresi�n 
log�stica una neurona utilizando como funci�n de activaci�n una sigmoide. </P>
<TABLE width="100%" border=0>
  <TBODY>
  <TR>
    <TD class=textoblanco bgColor=#6699cc 
height=25>REFERENCIAS</TD></TR></TBODY></TABLE>
<P class=texto>[1] Haykin, S. �Neural Networks: a Comprehensive Foundation�. 
Prentice-Hall, 1998. </P>
<P class=texto>[2] Mitchell, T. �Machine Learning�. Mc Graw-Hill, 1997. </P>
<P class=texto>[3] Murray, A.F. �Applications of&nbsp; Neural Networks�. Kluwer 
Academic Publishers, 1995. </P>
<P class=texto>[4] Ripley, B.D. �Pattern Recognition &amp; Neural Networks�. 
Cambridge University Press, 1996. </P>
<P class=texto>[5] Bishop, C.M. �Neural Networks for Patern Recognition�. 
Clarendon Press, 1996. </P>
<P class=texto>[6] Hair, J.F.H., et alt. �Multivariate Data Analysis�. Prentice 
Hall 1998. </P>
<P class=texto>[7] Manual del SPSS. </P>
<P class=texto>[8] Hampshire, J.B.,&nbsp; Pearlmutter, B.A. �Equivalence Proofs 
for Multilayer Perceptron Classifiers and the Bayesian Discriminant Function�. 
Proceedings of the 1990 Conectionist Models summer School, disponible 
en:<BR>&nbsp; </P>
<TABLE width="100%" border=0>
  <TBODY>
  <TR></TR></TBODY>
</TABLE>
</BODY></HTML>

%redes=textread('redessalvadas.txt','%s')
%tam=size(redes);
%for iter=1:1:tam(1,1)
%   iter
% strcat('load ','_',char(redes(iter)));
% strrep(ans,'_',' ');
%eval(ans)
c=dlmread('ciclo.txt');
t=dlmread('tendencia.txt');
tam=size(c);
res=[pra(:,1:1:tam(2));y(:,1:1:tam(2));y1];
ct=c.*t;
pr=res(1,:);
y=res(2,:);
%iter
y1=res(3,:);
%salida1=res(4,:);
figure
subplot(2,1,1)
plot(pr(:,1:1:tam(2)).*ct)
hold;
plot(y(:,1:1:tam(2)).*ct,'r')
%iter
plot(y1(:,1:1:tam(2)).*ct,'g')
title('Recuperación de la señal (real(en azul) calculada (en rojo)')
e=y-pr;
e1=y1-pr;
tam=size(pr);
larg=tam(2);
%disp('el error medio corresponde a ');
errormedio=mean(abs(e));
errormedio1=mean(abs(e1));
disp('el error medio cuadrado corresponde a ');
emc=(sum((e).^2))/larg;
emc1=(sum((e1).^2))/larg;
%iter
[pr;y];
%char(redes(iter))
dlmwrite('resultados.txt',ans,',')
set(gcf,'menubar','none');
set(gcf,'numbertitle','off');
set(gcf,'name','Recuperación de la serie');
set(gcf,'color',[1 1 1]);
set(gcf,'position',[0 25 650 420])
set(gcf,'resize','off');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[63 138.25 297 15.75], ...
   'String','Error de la red neuronal', ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[313 138.25 297 15.75], ...
   'String',errormedio, ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[63 118.25 297 15.75], ...
   'String','Error medio cuadrado de la red neuronal', ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[313 118.25 297 15.75], ...
   'String',emc, ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');

h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[63 98.25 297 15.75], ...
   'String','Error de la red neuronal (sin considerar pesos)', ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[313 98.25 297 15.75], ...
   'String',errormedio1, ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
   'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[63 78.25 297 15.75], ...
   'String','Error medio cuadrado de la red neuronal (sin pesos)', ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
	'Tag','StaticText1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'fontname','MS Sans Serif',...
   'fontsize',10,...
	'HorizontalAlignment','left', ...
	'ListboxTop',0, ...
	'Position',[313 78.25 297 15.75], ...
   'String',emc1, ...
	'BackgroundColor',[1 1 1],...   
	'Style','text', ...
   'Tag','StaticText1');

[pr;y;y1];
dlmwrite('resultados.txt',ans,',')
set(gcf,'menubar','none');
set(gcf,'numbertitle','off');
%set(gcf,'name','Recuperación de la serie');
set(gcf,'color',[1 1 1]);
set(gcf,'position',[0 25 650 420])
set(gcf,'resize','off');
%end
%pause
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'Callback','reent', ...
	'ListboxTop',0, ...
	'Position',[100 5 45.75 14], ...
   'String','reentrenar', ...
   'Tag','Pushbutton1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'Callback','predice', ...
	'ListboxTop',0, ...
	'Position',[210 5 90 14], ...
   'String','predecir', ...
	'Tag','Pushbutton1');
h1 = uicontrol(gcf, ...
	'Units','points', ...
	'BackgroundColor',[0.752941176470588 0.752941176470588 0.752941176470588], ...
	'Callback','close', ...
	'ListboxTop',0, ...
	'Position',[350 5 45.75 14], ...
   'String','Abandonar', ...
   'Callback','close all',...
   'Tag','Pushbutton1');
%res=dlmread('resultados.txt');






var parentGlobalController = {
    suscription:{
        status:function(){
            CORM.any(null,Curiosity.methodSend.POST,function(response){
               if(response != 'active' && response != 'in_trial'){
                    parentGlobalController.changeIcon({
                        text:'Reanudar',
                        action:'resume',
                        before:'fa-pause-circle-o',
                        after:'fa-play-circle-o'
                    });
               }
            },'/parent/suscription','status');
        },
        pause:function(){
            CORM.any(null,Curiosity.methodSend.POST,function(response){
                switch(response.status){
                    case 200:
                            parentGlobalController.changeIcon({
                                text:'Reanudar',
                                action:'resume',
                                before:'fa-pause-circle-o',
                                after:'fa-play-circle-o'
                            });
                            Curiosity.noty.success(response.message,"Bien hecho.");
                        break;
                    case 500:
                            console.log(response);
                            Curiosity.noty.error("Ha ocurrido un error al procesar su solicitud. Comuniquese con el administrador","Error");
                        break;
                }
            },'/parent/suscription','pause');
        },
        resume:function(){
            CORM.any(null,Curiosity.methodSend.POST,function(response){
                switch(response.status){
                    case 200:
                            parentGlobalController.changeIcon({
                                text:'Pausar',
                                action:'pause',
                                before:'fa-play-circle-o',
                                after:'fa-pause-circle-o'
                            });
                            Curiosity.noty.success(response.message,"Bien hecho.");
                        break;
                    case 500:
                            console.log(response);
                            Curiosity.noty.error("Ha ocurrido un error al procesar su solicitud. Comuniquese con el administrador","Error");
                        break;
                }
            },'/parent/suscription','resume');
        }

    },
    changeIcon:function(data){
        $('.gst-susc-p').text(data.text);
        var parent = $('.gst-susc-p').parent();
        parent.data('action',data.action);
        parent.children('span').eq(0).removeClass(data.before);
        parent.children('span').eq(0).addClass(data.after);
    }
};

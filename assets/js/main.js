

		$(function() {
        $("body").css("overflow", "visible");

        $("#datepicker").datepicker({ format: "dd/mm/yyyy",autoclose: true}).val();

				$("#datepicker1").datepicker({ format: "dd/mm/yyyy",autoclose: true}).val();

				var cssSmall = {

					width: 100,

					height: 175,

					marginTop:195

				};

				var cssMedium = {

					width: 150,

					height: 215,

					marginTop: 165

				};

				var cssLarge = {

					width:500,

					height:345,

					marginTop: 0

				};

				var aniConf = {

					queue: false,

					duration: 1000

				};



				$('#carousel')

					.children().css(cssSmall)

					.eq(1).css(cssMedium)

					.next().css(cssLarge)

					.next().css(cssMedium);

					

				$('#carousel').carouFredSel({

					width: '100%',

					height: 290,

					items: 5,

					scroll: {

						items: 1,

						duration: aniConf.duration,

						onBefore: function( data ) {								

							

							//	0 [ 1 ] 2  3  4

							data.items.old.eq(1).animate(cssSmall, aniConf);

							

							//	0  1 [ 2 ] 3  4

							data.items.old.eq(2).animate(cssMedium, aniConf);

							

							// 0  1  2  [ 3 ] 4

							data.items.old.eq(3).animate(cssLarge, aniConf);

							

							//	0  1  2  3 [ 4 ]

							data.items.old.eq(4).animate(cssMedium, aniConf);

						}

					}

				});
				 



			});
			
			



      function color_function(id,total)

      {

        for (var i = 1; i <= total; i++) 

        {

          if(i!=id)

          {

            $('#image_'+i).hide();

          }

          else

          {

            $('#image_'+i).show();

          }

        }

      }



      function function_alto()

      {

         var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v--pills-dimensions-tab').addClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

          

         }

         else if(value=='VXi')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').addClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').addClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').addClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').addClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi+')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').addClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi+ AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').addClass('active');

         }

      }

      

      function function_alto_features()

      {

         var value = $('#features').val();

         if(value=='LXi')

         {



            $('#v-pills--exterior-tab').addClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

          

         }

         else if(value=='VXi')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').addClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').addClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').addClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi+')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').addClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi+ AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').addClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_altok10()

      {

         var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v--pills-dimensions-tab').addClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

          

         }

         else if(value=='VXi')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').addClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').addClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').addClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').addClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi+')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').removeClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').addClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

         else if(value=='ZXi+ AMT')

         {

            $('#v--pills-dimensions-tab').removeClass('active');

            $('#v--pills-engine-tab').addClass('active');

            $('#v--pills-brakes-tab').removeClass('active');

            $('#v--pills-suspension-tab').removeClass('active');

            $('#v--pills-weight-tab').removeClass('active');

            $('#v--pills-capacity-tab').removeClass('active');

            $('#v--pills-tyres-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyres').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyres').removeClass('active');

         }

      }

      

      function function_altok10_features()

      {

         var value = $('#features').val();

         if(value=='LXi')

         {



            $('#v-pills--exterior-tab').addClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

          

         }

         else if(value=='VXi')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').addClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').addClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').addClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi+')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').removeClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').addClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi+ AMT')

         {

            $('#v-pills--exterior-tab').removeClass('active');

            $('#v-pills--interiors-tab').addClass('active');

            $('#v-pills--comfort-tab').removeClass('active');

            $('#v-pills--safety-tab').removeClass('active');

            $('#v-pills--utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_wagonr()

      {

         var value = $('#specification').val();

         if(value=='LXI 1.0L')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

          

         }

         else if(value=='LXI CNG 1.0L')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='LXI (O) 1.0L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='LXI (O) CNG 1.0L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI 1.0L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI (O) 1.0L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI AGS 1.0L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').addClass('active');

         }else if(value=='VXI (O) AGS 1.0L')

         {

           $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI (O) 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI AGS 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='VXI (O) AGS 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='ZXI 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }else if(value=='ZXI AGS 1.2L')

         {

           $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

      }



      function function_wagonr_features()

      {

         var value = $('#features').val();

         if(value=='LXI 1.0L')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXI CNG 1.0L')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXI (O) 1.0L')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXI (O) CNG 1.0L')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI 1.0L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='VXI (O) 1.0L')

         {

           $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI AGS 1.0L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI (O) AGS 1.0L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI 1.2L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI (O) 1.2L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='VXI AGS 1.2L')

         {

           $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI (O) AGS 1.2L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXI 1.2L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXI AGS 1.2L')

         {

           $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            

            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

           

            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_celerio()

      {

         var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='LXi (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi AGS')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi AGS (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi CNG')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='VXi CNG (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').addClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').addClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='ZXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').addClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').addClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').addClass('active'); 

         }

         else if(value=='ZXi (O)')

         {

          $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='ZXi AGS')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

         else if(value=='ZXi AGS (O)')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');

          

            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');

            

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active'); 

         }

      }



      function function_celerio_features()

      {

         var value = $('#features').val();

         if(value=='LXi')

         {

             $('#v-pills-exterior-tab').addClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').addClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').addClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXi (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').addClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').addClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').addClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').addClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').addClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-addClass').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').addClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').addClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').addClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').addClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AGS')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').addClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').addClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').addClass('active');

         }

         else if(value=='VXi AGS (O)')

         {

          $('#v-pills-exterior-tab').addClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').addClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').addClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi CNG')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').addClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').addClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').addClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi CNG (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').addClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').addClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').addClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').addClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').addClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').addClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').addClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').addClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi AGS')

         {

          $('#v-pills-exterior-tab').addClass('active');

             $('#v-pills-interiors-tab').removeClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').addClass('show');

             $('#v-pills-interiors').removeClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').addClass('active');

             $('#v-pills-interiors').removeClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AGS (O)')

         {

           $('#v-pills-exterior-tab').removeClass('active');

             $('#v-pills-interiors-tab').addClass('active');

             $('#v-pills-comfort-tab').removeClass('active');

             $('#v-pills-safety-tab').removeClass('active');

             $('#v-pills-utility-tab').removeClass('active');

             

             $('#v-pills-exterior').removeClass('show');

             $('#v-pills-interiors').addClass('show');

             $('#v-pills-comfort').removeClass('show');

             $('#v-pills-safety').removeClass('show');

             $('#v-pills-utility').removeClass('show');



             $('#v-pills-exterior').removeClass('active');

             $('#v-pills-interiors').addClass('active');

             $('#v-pills-comfort').removeClass('active');

             $('#v-pills-safety').removeClass('active');

             $('#v-pills-utility').removeClass('active');

         }    

      }



      function function_celeriox()

      {

        var value = $('#specification').val();

         if(value=='VXi')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='VXi (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='VXi AGS')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='VXi AGS (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='ZXi (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='ZXi AGS')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

         else if(value=='ZXi AGS (O)')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');

            $('#v-pills-powersteering-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').addClass('show');

            $('#v-pills-powersteering').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').addClass('active');

            $('#v-pills-powersteering').removeClass('active');

         }

      }



      function function_celeriox_features()

      {

        var value = $('#features').val();

         if(value=='VXi')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AGS')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AGS (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi (O)')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AGS')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AGS (O)')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_swift()

      {

        var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');


            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi +')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi + AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

      }



      function function_swift_features()

      {

        var value = $('#features').val();

         if(value=='LXi')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi +')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi + AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_dzire()

      {

        var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi +')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').addClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi + AMT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-tyre-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-tyre').removeClass('show');

            $('#v-pills-transmission').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-tyre').removeClass('active');

            $('#v-pills-transmission').addClass('active');

         }

      }



      function function_dzire_features()

      {

        var value = $('#features').val();

         if(value=='LXi')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');          

         }

         else if(value=='VXi AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi +')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi + AMT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_spresso()

      {

        var value = $('#specification').val();

         if(value=='STD')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='STD(O)')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='LXI')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='LXI (O)')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXI')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');


            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXI (O)')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXI +')

         {

            $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').addClass('active');

         }

         else if(value=='VXI AGS')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

      }



      function function_spresso_features()

      {

        var value = $('#features').val();

         if(value=='STD')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='STD(O)')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXI')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='LXI (O)')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='VXI (O)')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI +')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI AGS')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_ertiga()


      {

        var value = $('#specification').val();

         if(value=='LXi')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXI AT')

         {

        $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='VXi CNG')

         {

         $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').addClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').addClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi AT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').addClass('show');

            $('#v-pills-transmission').removeClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').addClass('active');

            $('#v-pills-transmission').removeClass('active');

         }

         else if(value=='ZXi+')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');

            $('#v-pills-capacity-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-weight').removeClass('show');

            $('#v-pills-capacity').removeClass('show');

            $('#v-pills-transmission').addClass('show');

           

            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-weight').removeClass('active');

            $('#v-pills-capacity').removeClass('active');

            $('#v-pills-transmission').addClass('active');

         }

      }



      function function_ertiga_features()

      {

        var value = $('#features').val();

         if(value=='LXi')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXI AT')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='VXi CNG')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='ZXi AT')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='ZXi+')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }



      function function_brezza()

      {

        var value = $('#specification').val();

         if(value=='LXI')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

         else if(value=='VXI')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

         else if(value=='VXI AT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

         else if(value=='ZXI')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

         }

         else if(value=='ZXI+')

         {

          $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

         else if(value=='ZXI AT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

         else if(value=='ZXI+ AT')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

         }

      }



      function function_brezza_features()

      {

        var value = $('#features').val();

         

         if(value=='LXI')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

         else if(value=='VXI')

         {

            $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

         else if(value=='VXI AT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

         else if(value=='ZXI')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

         else if(value=='ZXI+')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

         else if(value=='ZXI AT')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').addClass('active');

         }

         else if(value=='ZXI+ AT')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');

            $('#v-pills-colorvar-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');

            $('#v-pills-colorvar').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

            $('#v-pills-colorvar').removeClass('active');

         }

      }



      function function_ecco()

      {

        var value = $('#specification').val();

         if(value=='5 Seater Standard')

         {

            $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='7 Seater Standard')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='5 Seater AC')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='5 Seater AC, CNG')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='EECO Care')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').addClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').addClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='Tour V 5 STR STD')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').addClass('active');

         }

         else if(value=='Tour V 7 STR STD')

         {

          $('#v-pills-dimensions-tab').addClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').addClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').addClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='Tour V 5 STR AC')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').addClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').addClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').addClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='TOUR V 5 STR AC with CNG')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').addClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').addClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').addClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='EECO Cargo Petrol')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').addClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').addClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').addClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='EECO Cargo CNG')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').addClass('active');

            $('#v-pills-weight-tab').removeClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').addClass('show');

            $('#v-pills-weight').removeClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').addClass('active');

            $('#v-pills-weight').removeClass('active');

         }

         else if(value=='EECO Cargo CNG AC')

         {

          $('#v-pills-dimensions-tab').removeClass('active');

            $('#v-pills-engine-tab').removeClass('active');

            $('#v-pills-brakes-tab').removeClass('active');

            $('#v-pills-suspension-tab').removeClass('active');

            $('#v-pills-transmission-tab').removeClass('active');

            $('#v-pills-weight-tab').addClass('active');



            $('#v-pills-dimensions').removeClass('show');

            $('#v-pills-engine').removeClass('show');

            $('#v-pills-brakes').removeClass('show');

            $('#v-pills-suspension').removeClass('show');

            $('#v-pills-transmission').removeClass('show');

            $('#v-pills-weight').addClass('show');



            $('#v-pills-dimensions').removeClass('active');

            $('#v-pills-engine').removeClass('active');

            $('#v-pills-brakes').removeClass('active');

            $('#v-pills-suspension').removeClass('active');

            $('#v-pills-transmission').removeClass('active');

            $('#v-pills-weight').addClass('active');

         }

      }



      function function_ecco_features()

      {

        var value = $('#features').val();

         if(value=='5 Seater Standard')

         {

            $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='7 Seater Standard')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='5 Seater AC')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='5 Seater AC, CNG')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='EECO Care')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='Tour V 5 STR STD')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='Tour V 7 STR STD')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='Tour V 5 STR AC')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').addClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').addClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').addClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='TOUR V 5 STR AC with CNG')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').addClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').addClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').addClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='EECO Cargo Petrol')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').addClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').addClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').addClass('active');

         }

         else if(value=='EECO Cargo CNG')

         {

          $('#v-pills-exterior-tab').addClass('active');

            $('#v-pills-interiors-tab').removeClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').addClass('show');

            $('#v-pills-interiors').removeClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').addClass('active');

            $('#v-pills-interiors').removeClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

         else if(value=='EECO Cargo CNG AC')

         {

          $('#v-pills-exterior-tab').removeClass('active');

            $('#v-pills-interiors-tab').addClass('active');

            $('#v-pills-comfort-tab').removeClass('active');

            $('#v-pills-safety-tab').removeClass('active');

            $('#v-pills-utility-tab').removeClass('active');



            $('#v-pills-exterior').removeClass('show');

            $('#v-pills-interiors').addClass('show');

            $('#v-pills-comfort').removeClass('show');

            $('#v-pills-safety').removeClass('show');

            $('#v-pills-utility').removeClass('show');



            $('#v-pills-exterior').removeClass('active');

            $('#v-pills-interiors').addClass('active');

            $('#v-pills-comfort').removeClass('active');

            $('#v-pills-safety').removeClass('active');

            $('#v-pills-utility').removeClass('active');

         }

      }

// $(document).ready(function() {  

//     document.addEventListener('contextmenu', event => event.preventDefault());
//     $(document).keydown(function (event) {
//     if (event.keyCode == 123) { // Prevent F12
//     return false;
//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
//     return false;
//     }
//     });
//     console.clear();

//   });


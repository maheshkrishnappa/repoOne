function functionselectMovie()
{

	var section1 = 
					{
						genere:  
							{
								g1: "AC", g2: "CH", g3: "RC", g4: "AF"
							},
						day: 
							{
								name	: "day", 
								daySet1	: 
										{
											d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},
								daySet2	: 
										{
											d1: "Monday" , d2: "Tuesday" , d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},
								daySet3	: 
										{
											d1: "Monday" , d2: "Tuesday" , d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},				
								daySet4	: 
										{
											d1: "Monday" , d2: "Tuesday" , d6: "Saturday",  d7: "Sunday"
										},
							},
						time:
							{
								name	: "time",
								timeSet1:
										{
											t1: "9pm" 
										},
								timeSet2:
										{
											t1: "12pm" , t2: "1pm" , t3: "6pm"
										},
								timeSet3:
										{
											t2: "1pm" , t4: "6pm" , t5: "9pm"
										},
								timeSet4:
										{
											t3: "3pm" , t4: "6pm" 
										},		
							}
					
								
					};
			
	var key,count=0;
	for(key in section1.day.daySet1)
	{
		if(section1.day.daySet1.hasOwnProperty(key))
		count++;
	}
	
	console.log("day set count: "+count)
	
	var selectMovie = document.getElementById("selectMovie");
	var selectMovieOption = selectMovie.options[selectMovie.selectedIndex].value;
	
	console.log("selectMovieOption: "+selectMovieOption);
	
	var count_setDay = 0;
	var countDel = 0;
	
	for(var key in section1.genere)
	{
		if(section1.genere.hasOwnProperty(key))
		{
			
			var movieSetValue = section1.genere[key];
			
			console.log("[ " +count_setDay+ " ] movieSetValue: "+movieSetValue);
			
			/*
			if(! selectMovieOption )
			{	
				//functionMovieQtyReset();
				
				document.getElementById("saAdult").value = '';
				document.getElementById("saAdult").setAttribute("min", 0);
				document.getElementById("saAdult").setAttribute("max", 0);
				//document.getElementById("saAdult").readOnly = true;
				
			}
			*/
			//document.getElementById("saAdult").setAttribute("min", 0);
			//document.getElementById("saAdult").setAttribute("max", 0);
			
			//document.getElementById("saAdult").readOnly = true;
			
			functionReadOnly();
			
			if( selectMovieOption == section1.genere[key] )
			{
				//setting day dropdown value Start
				
				
				var selectDay = document.getElementById("selectDay");
				var selectDayLength = document.getElementById("selectDay").length;
				
				console.log("selectDayLength: "+selectDayLength);
				
				//independent of dayset[1,2,3,4]
				if(selectDayLength > 1)
				{
					for(var i=selectDayLength-1; i > 0; i--)
					{
						console.log("value of i: " +i);
						console.log(selectDay.options[i]);
						selectDay.remove(i);
					}
				}
				
				var selectTime = document.getElementById("selectTime");
				var selectTimeLength = document.getElementById("selectTime").length;
				
				console.log("selectTimeLength: "+selectTimeLength);
				
				if(selectTimeLength > 1)
				{
					for(var i=selectTimeLength-1; i > 0; i--)
					{
						console.log("value of i: " +i);
						console.log(selectTime.options[i]);
						selectTime.remove(i);
					}
				}
				
				//reseting 
				
				var daySet = null;
				if(selectMovieOption == "AC")
				{
					daySet = section1.day.daySet1;
				}
				else if(selectMovieOption == "CH")
				{
					daySet = section1.day.daySet2;
				}
				else if(selectMovieOption == "RC")
				{
					daySet = section1.day.daySet3;
				}
				else
				{
					daySet = section1.day.daySet4;
				}
				
				for(var key in daySet)
				{
					if(daySet.hasOwnProperty(key))
					{
						var dayOption1 = document.createElement("option");
										
						dayOption1.textContent = daySet[key];
						dayOption1.value = daySet[key];
						selectDay.appendChild(dayOption1);
						dayOption1.setAttribute( "name" , section1.day.name );
						
						//quantity
						//document.getElementById("saAdult").setAttribute("min", 0);
						//document.getElementById("saAdult").setAttribute("max", 10);
					}
				}
				countDel++;
			}
		}
		count_setDay++;
	}
	
	console.log("countDel: " +countDel);
	if(countDel == 0)
	{
		//select day start
		var selectDay = document.getElementById("selectDay");
		var selectDayLength = document.getElementById("selectDay").length;
		
		console.log("before remove length");
		console.log(selectDayLength);
		
		for(var i=selectDayLength-1; i > 0; i--)
		{
			console.log("value of i: " +i);
			console.log(selectDay.options[i]);
			selectDay.remove(i);
		}
		
		console.log("after remove length");
		console.log(selectDayLength);
		
		//select day end
		
		//select time start
		var selectTime = document.getElementById("selectTime");
		var selectTimeLength = document.getElementById("selectTime").length;
		
		console.log("before remove length");
		console.log(selectTimeLength);
		
		for(var i=selectTimeLength-1; i > 0; i--)
		{
			console.log("value of i: " +i);
			console.log(selectTime.options[i]);
			selectTime.remove(i);
		}
		
		console.log("after remove length");
		console.log(selectTimeLength);
		//select time end
	}
}

function functionSelectDay()
{
	var section1 = 
					{
						genere:  
							{
								g1: "AC", g2: "CH", g3: "RC", g4: "AF"
							},
						day: 
							{
								name	: "day", 
								daySet1	: 
										{
											d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},
								daySet2	: 
										{
											d1: "Monday" , d2: "Tuesday" , d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},
								daySet3	: 
										{
											d1: "Monday" , d2: "Tuesday" , d3: "Wednesday" , d4: "Thursday",  d5: "Friday",  d6: "Saturday",  d7: "Sunday"
										},				
								daySet4	: 
										{
											d1: "Monday" , d2: "Tuesday" , d3: "Saturday",  d4: "Sunday"
										},
							},
						time:
							{
								name	: "time",
								timeSet1:
										{
											t1: "9pm" 
										},
								timeSet2:
										{
											t1: "1pm" , t2: "6pm" , t3: "12pm"
										},
								timeSet3:
										{
											t1: "9pm" , t2: "1pm" , t3: "6pm"
										},
								timeSet4:
										{
											t1: "6pm" , t2: "3pm" 
										},		
							}
					
								
					};
	
	price =
			{
				high : { SA: "18.00", SP: "15.00" , SC: "12.00" , FA: "30.00" , FC: "25.00" , B1: "30.00" , B2: "30.00" , B3: "30.00" },
				low  : { SA: "12.00", SP: "10.00" , SC: "8.00"  , FA: "25.00" , FC: "20.00" , B1: "20.00" , B2: "20.00" , B3: "20.00" }
				
			};
	
	priceHigh = 
				{
					day	: { d1: "Wednesday" , d2: "Thursday" , d3: "Friday" , d4: "Saturday" , d5: "Sunday" },
					time: { t1: "12pm" , t2: "3pm" , t3: "6pm" , t4: "9pm"}
				};
	
	var count_time=0;
	for(var key in section1.time.timeSet1) //t1: "9pm"
	{
		if(section1.time.timeSet1.hasOwnProperty(key))
		count_time++;
	}
	
	console.log("[setTimeFn] count of section1.genere.group1.time.timeSet: " +count_time);
	
	var selectDay = document.getElementById("selectDay");
	var selectDayOption = selectDay.options[selectDay.selectedIndex].value;
	
	console.log("[setTimeFn] selectDay.options[selectDay.selectedIndex].value: " +selectDayOption);
	
	var count_day=0;
	for(var key in section1.day.daySet1)
	{
		if(section1.day.daySet1.hasOwnProperty(key))
		count_day++;
	}
	
	console.log("[setTimeFn] count of section1.genere.group1.day.daySet: " +count_day);
	
	console.log("[setTimeFn] count of section1.genere.group1.day.daySet: " +section1.day.daySet1[key]);
	
	var count_setTime = 0;
	var countDel = 0;
	
	var selectMovie = document.getElementById("selectMovie");
	var selectMovieOption = selectMovie.options[selectMovie.selectedIndex].value;
	
	var daySet,timeSet = null;
	
	//document.getElementById("saAdult").readOnly = false;
	
	functionWrite();
	functionMinMax();

	if(selectMovieOption == "AC")
	{
		daySet = section1.day.daySet1;
		timeSet = section1.time.timeSet1;
		
		//setting up each day and time validation start
		
		for( var key in daySet)
		{
			if(daySet.hasOwnProperty(key))
			{
				var daySetValue = daySet[key];
				
				console.log("[ " +count_setTime+ " ] daySetValue: "+daySetValue);
					
					if( selectDayOption == daySetValue ) 
					{
						//setting time dropdown value Start
						var selectTime = document.getElementById("selectTime");
						var selectTimeLength = document.getElementById("selectTime").length;
						
						console.log("selectTimeLength: "+selectTimeLength);
						
						if(selectTimeLength > 1)
						{
							for(var i=selectTimeLength-1; i > 0; i--)
							{
								console.log("value of i: " +i);
								console.log(selectTime.options[i]);
								selectTime.remove(i);
							}
						}
											
						for(var key in timeSet)
						{
							if(timeSet.hasOwnProperty(key))
							{
								var dayOption1 = document.createElement("option");
												
								dayOption1.textContent = timeSet[key];
								dayOption1.value = timeSet[key];
								selectTime.appendChild(dayOption1);
								dayOption1.setAttribute( "name" , section1.time.name );
								dayOption1.setAttribute( "selected" , "selected" );
								
								//for all type of tickets
								//functionMinMax();
								
								//document.getElementById("saAdult").setAttribute("min", 0);
								//document.getElementById("saAdult").setAttribute("max", 10);
							}
						}					
						//setting day dropdown value End
						countDel++;
					}
			}
			count_setTime++;
		}
		//setting up each day and time validation end
	}
	else if(selectMovieOption == "CH")
	{
		daySet = section1.day.daySet2;
		timeSet = section1.time.timeSet2;
		
		//setting up each day and time validation start
		
		for( var key in daySet)
		{
			if(daySet.hasOwnProperty(key))
			{
				//var daySetValue = daySet[key];
				var daySetValue1 = daySet["d1"];
				var daySetValue2 = daySet["d2"];
				
				console.log("daySetValue1: "+daySetValue1);
				console.log("daySetValue2: "+daySetValue2);
				
				if( selectDayOption == daySet["d1"] || selectDayOption == daySet["d2"]) 
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t1"];
					dayOption1.value = timeSet["t1"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
					
					//functionMinMax();
					
					//setting day dropdown value End
					countDel++;
				}
				
				else if( selectDayOption == daySet["d3"] || selectDayOption == daySet["d4"] || selectDayOption == daySet["d5"]) 
				{
					
					//setting time dropdown value Start
					
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t2"];
					dayOption1.value = timeSet["t2"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;
				}
				else if ( selectDayOption == daySet["d6"] || selectDayOption == daySet["d7"] )
				{
					//setting time dropdown value Start
					
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t3"];
					dayOption1.value = timeSet["t3"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;	
				}
			}
			count_setTime++;
		}
		//setting up each day and time validation end
	}
	else if(selectMovieOption == "RC")
	{
		daySet = section1.day.daySet3;
		timeSet = section1.time.timeSet3;
		
		//setting up each day and time validation start
		
		for( var key in daySet)
		{
			if(daySet.hasOwnProperty(key))
			{
				//var daySetValue = daySet[key];
				
				var daySetValue1 = daySet["d1"];
				var daySetValue2 = daySet["d2"];
				
				console.log("daySetValue1: "+daySetValue1);
				console.log("daySetValue2: "+daySetValue2);
				
				if( selectDayOption == daySet["d1"] || selectDayOption == daySet["d2"]) 
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t1"];
					dayOption1.value = timeSet["t1"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;
				}
				
				else if( selectDayOption == daySet["d3"] || selectDayOption == daySet["d4"] || selectDayOption == daySet["d5"]) 
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t2"];
					dayOption1.value = timeSet["t2"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;
				}
				else if( selectDayOption == daySet["d6"] || selectDayOption == daySet["d7"] )
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t3"];
					dayOption1.value = timeSet["t3"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;	
				}	
			}
			count_setTime++;
		}
	}
	else
	{
		daySet = section1.day.daySet4;
		timeSet = section1.time.timeSet4;
		
		for( var key in daySet)
		{
			if(daySet.hasOwnProperty(key))
			{
				//var daySetValue = daySet[key];
				var daySetValue1 = daySet["d1"];
				var daySetValue2 = daySet["d2"];
								
				if( selectDayOption == daySet["d1"] || selectDayOption == daySet["d2"]) 
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t1"];
					dayOption1.value = timeSet["t1"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;
				}
				
				else if( selectDayOption == daySet["d3"] || selectDayOption == daySet["d4"] )
				{
					//setting time dropdown value Start
					var selectTime = document.getElementById("selectTime");
					var selectTimeLength = document.getElementById("selectTime").length;
					
					console.log("selectTimeLength: "+selectTimeLength);
					
					if(selectTimeLength > 1)
					{
						for(var i=selectTimeLength-1; i > 0; i--)
						{
							console.log("value of i: " +i);
							console.log(selectTime.options[i]);
							selectTime.remove(i);
						}
					}
					
					var dayOption1 = document.createElement("option");
									
					dayOption1.textContent = timeSet["t2"];
					dayOption1.value = timeSet["t2"];
					selectTime.appendChild(dayOption1);
					dayOption1.setAttribute( "name" , section1.time.name );
					dayOption1.setAttribute( "selected" , "selected" );
											
					//setting day dropdown value End
					countDel++;	
				}	
			}
			count_setTime++;
		}
	}
		
	console.log("countDel: " +countDel);
	if(countDel == 0)
	{
		//select time start
		var selectTime = document.getElementById("selectTime");
		var selectTimeLength = document.getElementById("selectTime").length;
		
		console.log("before remove length");
		console.log(selectTimeLength);
		
		for(var i=selectTimeLength-1; i > 0; i--)
		{
			console.log("value of i: " +i);
			console.log(selectTime.options[i]);
			selectTime.remove(i);
		}
		
		console.log("after remove length");
		console.log(selectTimeLength);
		
		//select time end	
	}
	functionCalHighLow();
	functionDisplayPrice();
}	

function functionReset()
{
	console.log("reset function is triggered");
	
	var saAdultValue = document.getElementById("saAdult").value;
	
	if(saAdultValue > 1)
	{
		//document.getElementById("saAdult").value = '';
		var cost=0;
		var saAdult = document.getElementById("saAdult").value;
		
		console.log("saAdult: "+saAdult);
		cost = saAdult*10;
		console.log("cost : "+cost );
		
		document.getElementById("saAdultST").setAttribute("value", cost);
		document.getElementById("saAdultST").innerHTML = "$"+cost+".00";	
	}
	console.log("out saAdultValue: "+saAdultValue);
}

function functionQuantityReset()
{	
	//document.getElementById("saAdult").value = '';
	var selectMovie = document.getElementById("selectMovie");
	var selectMovieOption = selectMovie.options[selectMovie.selectedIndex].value;
	
	var selectDay = document.getElementById("selectDay");
	var selectDayOption = selectDay.options[selectDay.selectedIndex].value;
	
	var selectTime = document.getElementById("selectTime");
	var selectTimeOption = selectTime.options[selectTime.selectedIndex].value;
		
	if( ! (selectMovieOption) ) // && selectDayOption && selectTimeOption) )
	{
		console.log("!! in !!");
		document.getElementById("saAdult").readOnly = true;
		document.getElementById("saAdult").value = '';
		document.getElementById("saAdult").setAttribute("min", 0);
		document.getElementById("saAdult").setAttribute("max", 0);
	}
}

function functionReadOnly()
{
	//document.getElementById("saAdult").readOnly = true;
	
	var elementTagName = document.getElementsByTagName("input");
	
	console.log("elementTagName.length: "+elementTagName.length);
	
	for( var i =0; i <elementTagName.length; i++ )
	{
		if( elementTagName[i].type.toLowerCase() == 'number' )
		{
			elementTagName[i].readOnly = true;
		}
	}	
}

function functionWrite()
{
	//document.getElementById("saAdult").readOnly = true;
	
	var elementTagName = document.getElementsByTagName("input");
	
	console.log("elementTagName.length: "+elementTagName.length);
	
	for( var i =0; i <elementTagName.length; i++ )
	{
		if( elementTagName[i].type.toLowerCase() == 'number' )
		{
			elementTagName[i].readOnly = false;
		}
	}	
}

function functionMinMax()
{
	//document.getElementById("saAdult").readOnly = true;
	
	var elementTagName = document.getElementsByTagName("input");
	
	console.log("elementTagName.length: "+elementTagName.length);
	
	for( var i =0; i <elementTagName.length; i++ )
	{
		if( elementTagName[i].type.toLowerCase() == 'number' )
		{
			elementTagName[i].min = 0;
			elementTagName[i].max = 10;
			
		}
	}	
}

function functionMovieQtyReset()
{
	var elementTagName = document.getElementsByTagName("input");
	
	console.log("elementTagName.length: "+elementTagName.length);
	
	for( var i =0; i <elementTagName.length; i++ )
	{
		if( elementTagName[i].type.toLowerCase() == 'number' )
		{
			elementTagName[i].value = '';
		
		}
	}
}

function calculatePrice()
{
	price =
			{
				high : { SA: "18.00", SP: "15.00" , SC: "12.00" , FA: "30.00" , FC: "25.00" , B1: "30.00" , B2: "30.00" , B3: "30.00" },
				low  : { SA: "12.00", SP: "10.00" , SC: "8.00"  , FA: "25.00" , FC: "20.00" , B1: "20.00" , B2: "20.00" , B3: "20.00" }
			};
	
	priceHigh = 
				{
					day	: { d1: "Wednesday" , d2: "Thursday" , d3: "Friday" , d4: "Saturday" , d5: "Sunday" },
					time: { t1: "12pm" , t2: "3pm" , t3: "6pm" , t4: "9pm"}
				};
				
    priceLow = 
				{
					day	: { d1: "Monday" , d2: "Tuesday" , d3: "Wednesday" , d4: "Thursday" , d5: "Friday" },
					time: { t1: "1pm" , t2: "6pm" , t3: "9pm" }
				};						
	
	functionCalHighLow();
}

function functionCalHighLow()
{
	var selectDay 	= document.getElementById("selectDay").value;
	var selectTime 	= document.getElementById("selectTime").value;

	console.log("selectDay:"+selectDay);
	console.log("selectTime:"+selectTime);

	//low
	if	(	(	( ( selectDay == "Monday" || selectDay == "Tuesday" ) && ( selectTime == "1pm" || selectTime == "6pm" || selectTime == "9pm" ) ) ||
		        ( ( selectDay == "Wednesday" || selectDay == "Thursday" || selectDay == "Friday" ) && ( selectTime == "1pm" ) ) 
			)		
		)
	{
		console.log("inside low price calculation if condition");
					
		var cost=0;

		var saAdult = document.getElementById("saAdult").value;
		
		if( saAdult >= 0 )
		{
			console.log("saAdult: "+saAdult);
			cost = saAdult*price.low.SA;
			
			if( saAdult < 0 )
			{
				console.log("inside if ( saAdult < 0 ) ");
				cost = 0;
			}
			
			console.log("cost : "+cost );
			
			document.getElementById("saAdultST").setAttribute("value", cost);
			document.getElementById("saAdultST").innerHTML = "$"+cost+".00";
		}
			
		//id="spConcession"
		var spConcession = document.getElementById("spConcession").value;
		
		if( spConcession >= 0 )	
		{
			console.log("spConcession: "+spConcession);
			cost = spConcession*price.low.SP;
			console.log("cost : "+cost );
			
			document.getElementById("spConcessionST").setAttribute("value", cost);
			document.getElementById("spConcessionST").innerHTML = "$"+cost+".00";
		}		
		//scChild
		var scChild = document.getElementById("scChild").value;
		
		console.log("scChild: "+scChild);
		cost = scChild*price.low.SC;
		console.log("cost : "+cost );
		
		var saAdultT = document.getElementById("saAdultST").getAttribute("value");
		var spConcessionT = document.getElementById("spConcessionST").getAttribute("value");
		var scChild = document.getElementById("scChildST").getAttribute("value");
		
		stdSubTotal =	+saAdultT 		+ 
						+spConcessionT 	+
						+scChild;
						
		console.log("stdSubTotal: "+stdSubTotal );
		
		document.getElementById("stdSubTotal").innerHTML = "$"+stdSubTotal+".00";
		
		document.getElementById("scChildST").setAttribute("value", cost);
		document.getElementById("scChildST").innerHTML = "$"+cost+".00";
		
		//faAdult		
		var faAdult = document.getElementById("faAdult").value;
		
		if( faAdult >= 0 )
		{
			console.log("faAdult: "+faAdult);
			cost = faAdult*price.low.FA;
			console.log("cost : "+cost );
			
			document.getElementById("faAdultST").setAttribute("value", cost);
			document.getElementById("faAdultST").innerHTML = "$"+cost+".00";
		}
		
		//fcChild
		var fcChild = document.getElementById("fcChild").value;
		
		if( fcChild >= 0 )		
		{
			console.log("fcChild: "+fcChild);
			cost = fcChild*price.low.FC;
			console.log("cost : "+cost );
			
			document.getElementById("fcChildST").setAttribute("value", cost);
			document.getElementById("fcChildST").innerHTML = "$"+cost+".00";
		}	
		
		var fcSubTotal = 0;
		
		var faAdult = document.getElementById("faAdultST").getAttribute("value");
		var fcChild = document.getElementById("fcChildST").getAttribute("value");
		
		fcSubTotal =	+faAdult 		+ 
						+fcChild; 	
						
		console.log("fcSubTotal: "+fcSubTotal );
		
		document.getElementById("fcSubTotal").innerHTML = "$"+fcSubTotal+".00";
		
		//b1Bean
		var b1Bean = document.getElementById("b1Bean").value;
		
		if( b1Bean >= 0 )	
		{
			console.log("b1Bean: "+b1Bean);
			cost = b1Bean*price.low.B1;
			console.log("cost : "+cost );
			
			document.getElementById("b1BeanST").setAttribute("value", cost);
			document.getElementById("b1BeanST").innerHTML = "$"+cost+".00";	
		}
		
		//b2Bean
		var b2Bean = document.getElementById("b2Bean").value;
		
		if( b2Bean >= 0 )
		{
			console.log("b2Bean: "+b2Bean);
			cost = b2Bean*price.low.B2;
			console.log("cost : "+cost );
			
			document.getElementById("b2BeanST").setAttribute("value", cost);
			document.getElementById("b2BeanST").innerHTML = "$"+cost+".00";	
		}
		
		//b3Bean
		var b3Bean = document.getElementById("b3Bean").value;
		
		if( b3Bean > 0 )
		{
			console.log("b3Bean: "+b3Bean);
			cost = b3Bean*price.low.B3;
			console.log("cost : "+cost );
			
			document.getElementById("b3BeanST").setAttribute("value", cost);
			document.getElementById("b3BeanST").innerHTML = "$"+cost+".00";	
		}	
		var beanSubTotal = 0;
		
		var b1BeanST = document.getElementById("b1BeanST").getAttribute("value");
		var b2BeanST = document.getElementById("b2BeanST").getAttribute("value");
		var b3BeanST = document.getElementById("b3BeanST").getAttribute("value");
		
		beanSubTotal =	+b1BeanST 		+ 
						+b2BeanST		+ 	
						+b3BeanST;
		console.log("beanSubTotal: "+beanSubTotal );
		
		document.getElementById("beanSubTotal").innerHTML = "$"+beanSubTotal+".00";
		
		//totalPrice
		var totalPrice = 0;	
		
		var saAdultT = document.getElementById("saAdultST").getAttribute("value");
		var spConcessionT = document.getElementById("spConcessionST").getAttribute("value");
		var scChild = document.getElementById("scChildST").getAttribute("value");
		var faAdult = document.getElementById("faAdultST").getAttribute("value");
		var fcChild = document.getElementById("fcChildST").getAttribute("value");
		var b1BeanST = document.getElementById("b1BeanST").getAttribute("value");
		var b2BeanST = document.getElementById("b2BeanST").getAttribute("value");
		var b3BeanST = document.getElementById("b3BeanST").getAttribute("value");
		
		totalPrice = +saAdultT 		+ 
					 +spConcessionT +
					 +scChild		+
					 +faAdult		+
					 +fcChild		+
					 +b1BeanST		+
					 +b2BeanST		+
					 +b3BeanST		;			 
		
		console.log("totalPrice: "+totalPrice );
		
		document.getElementById("iTotalPrice").setAttribute("value", totalPrice);
		
		var iTotalPrice = document.getElementById("iTotalPrice").getAttribute("value");
		
		console.log("iTotalPrice: "+iTotalPrice );
		
		document.getElementById("totalPrice").innerHTML = "$"+totalPrice+".00";					
	}
	else
	{
		console.log("inside high price calculation else condition");
						
		var cost=0;

		var saAdult = document.getElementById("saAdult").value;
		
		if( saAdult >= 0 )
		{
			console.log("saAdult: "+saAdult);
			cost = saAdult*price.high.SA;
			console.log("cost : "+cost );
			
			document.getElementById("saAdultST").setAttribute("value", cost);
			document.getElementById("saAdultST").innerHTML = "$"+cost+".00";
		}
		
		//id="spConcession"
		var spConcession = document.getElementById("spConcession").value;
		
		if( spConcession >= 0 )
		{
			console.log("spConcession: "+spConcession);
			cost = spConcession*price.high.SP;
			console.log("cost : "+cost );
			
			document.getElementById("spConcessionST").setAttribute("value", cost);
			document.getElementById("spConcessionST").innerHTML = "$"+cost+".00";
		}
		
		//scChild
		var scChild = document.getElementById("scChild").value;
		
		if( scChild >= 0 )
		{
			console.log("scChild: "+scChild);
			cost = scChild*price.high.SC;
			console.log("cost : "+cost );
			
			document.getElementById("scChildST").setAttribute("value", cost);
			document.getElementById("scChildST").innerHTML = "$"+cost+".00";
		}
		
		var stdSubTotal = 0;
		
		var saAdultT = document.getElementById("saAdultST").getAttribute("value");
		var spConcessionT = document.getElementById("spConcessionST").getAttribute("value");
		var scChild = document.getElementById("scChildST").getAttribute("value");
		
		stdSubTotal =	+saAdultT 		+ 
						+spConcessionT 	+
						+scChild;
						
		console.log("stdSubTotal: "+stdSubTotal );
		
		document.getElementById("stdSubTotal").innerHTML = "$"+stdSubTotal+".00";
					 
		//faAdult		
		var faAdult = document.getElementById("faAdult").value;
		
		if( faAdult >= 0 )
		{
			console.log("faAdult: "+faAdult);
			cost = faAdult*price.high.FA;
			console.log("cost : "+cost );
			
			document.getElementById("faAdultST").setAttribute("value", cost);
			document.getElementById("faAdultST").innerHTML = "$"+cost+".00";
		}
		
		//fcChild
		var fcChild = document.getElementById("fcChild").value;
		
		if( fcChild >= 0 )
		{
			console.log("fcChild: "+fcChild);
			cost = fcChild*price.high.FC;
			console.log("cost : "+cost );
			
			document.getElementById("fcChildST").setAttribute("value", cost);
			document.getElementById("fcChildST").innerHTML = "$"+cost+".00";
		}
		
		var fcSubTotal = 0;
		
		var faAdult = document.getElementById("faAdultST").getAttribute("value");
		var fcChild = document.getElementById("fcChildST").getAttribute("value");
		
		fcSubTotal =	+faAdult 		+ 
						+fcChild; 	
						
		console.log("fcSubTotal: "+fcSubTotal );
		
		document.getElementById("fcSubTotal").innerHTML = "$"+fcSubTotal+".00";
		
		//b1Bean
		var b1Bean = document.getElementById("b1Bean").value;
		
		if( b1Bean >= 0 )
		{
			console.log("b1Bean: "+b1Bean);
			cost = b1Bean*price.high.B1;
			console.log("cost : "+cost );
			
			document.getElementById("b1BeanST").setAttribute("value", cost);
			document.getElementById("b1BeanST").innerHTML = "$"+cost+".00";	
		}
		
		//b2Bean
		var b2Bean = document.getElementById("b2Bean").value;
		
		if( b2Bean > 0 )
		{
			console.log("b2Bean: "+b2Bean);
			cost = b2Bean*price.high.B2;
			console.log("cost : "+cost );
			
			document.getElementById("b2BeanST").setAttribute("value", cost);
			document.getElementById("b2BeanST").innerHTML = "$"+cost+".00";	
		}
		
		//b3Bean
		var b3Bean = document.getElementById("b3Bean").value;
		
		if( b3Bean >= 0 )		
		{
			console.log("b3Bean: "+b3Bean);
			cost = b3Bean*price.high.B3;
			console.log("cost : "+cost );
			
			document.getElementById("b3BeanST").setAttribute("value", cost);
			document.getElementById("b3BeanST").innerHTML = "$"+cost+".00";	
		}
		
		var beanSubTotal = 0;
		
		var b1BeanST = document.getElementById("b1BeanST").getAttribute("value");
		var b2BeanST = document.getElementById("b2BeanST").getAttribute("value");
		var b3BeanST = document.getElementById("b3BeanST").getAttribute("value");
		
		beanSubTotal =	+b1BeanST 		+ 
						+b2BeanST		+ 	
						+b3BeanST;
		console.log("beanSubTotal: "+beanSubTotal );
		
		document.getElementById("beanSubTotal").innerHTML = "$"+beanSubTotal+".00";
		
		//totalPrice
		var totalPrice = 0;	
		
		var saAdultT = document.getElementById("saAdultST").getAttribute("value");
		var spConcessionT = document.getElementById("spConcessionST").getAttribute("value");
		var scChild = document.getElementById("scChildST").getAttribute("value");
		var faAdult = document.getElementById("faAdultST").getAttribute("value");
		var fcChild = document.getElementById("fcChildST").getAttribute("value");
		var b1BeanST = document.getElementById("b1BeanST").getAttribute("value");
		var b2BeanST = document.getElementById("b2BeanST").getAttribute("value");
		var b3BeanST = document.getElementById("b3BeanST").getAttribute("value");
		
		totalPrice = +saAdultT 		+ 
					 +spConcessionT +
					 +scChild		+
					 +faAdult		+
					 +fcChild		+
					 +b1BeanST		+
					 +b2BeanST		+
					 +b3BeanST		;
		
		console.log("totalPrice: "+totalPrice );

		var elementTagName = document.getElementsByTagName("input");
		var count = 0;
		console.log("[hidden]elementTagName.length: "+elementTagName.length);
		
		document.getElementById("iTotalPrice").setAttribute("value", totalPrice);
		
		var iTotalPrice = document.getElementById("iTotalPrice").getAttribute("value");
		
		console.log("iTotalPrice: "+iTotalPrice );
		
		document.getElementById("totalPrice").innerHTML = "$"+totalPrice+".00";
	}
}

function functionDisplayPrice()
{
	price =
			{
				"low" 	: 	
							[
								{ "price": 'Price' }, { "price": "12.00" }, { "price": "10.00" }, { "price": "8.00"  }, { "price": '' }, { "price": "25.00" }, { "price": "20.00" }, { "price": '' }, { "price": "20.00" }, { "price": "20.00" }, { "price": "20.00" }
							],
			
			
				"high"	: 
							[
								{ "price": 'Price' }, { "price": "18.00" }, { "price": "15.00" }, { "price": "12.00" }, { "price": '' }, { "price": "30.00" }, { "price": "25.00" }, { "price": '' }, { "price": "30.00" }, { "price": "30.00" },  { "price": "30.00" }
							]
			};
					
	var selectDay 	= document.getElementById("selectDay").value;
	var selectTime 	= document.getElementById("selectTime").value;
	
	console.log("selectDay:"+selectDay);
	console.log("selectTime:"+selectTime);

	//low
	if	(	(	( ( selectDay == "Monday" || selectDay == "Tuesday" ) && ( selectTime == "1pm" || selectTime == "6pm" || selectTime == "9pm" ) ) ||
		        ( ( selectDay == "Wednesday" || selectDay == "Thursday" || selectDay == "Friday" ) && ( selectTime == "1pm" ) ) 
			)	
		)
	{
		var x = document.getElementById("tableId");
		
		for(var i =0; i<x.rows.length-2; i++)
		{
			x.rows[i].cells[1].innerHTML = price.low[i].price;		
		}
	}
	else
	{
		var x = document.getElementById("tableId");
		
		for(var i =0; i<x.rows.length-2; i++)
		{
			x.rows[i].cells[1].innerHTML = price.high[i].price;		
		}	
	}
}

function functionCheckQuantity()
{
	
	console.log("functionCheckQuantity??");
	//new logic
	
	var totalValue = document.getElementById("iTotalPrice").value;
	console.log("totalValue[#@$@#@$@$#@$#]: "+totalValue);
	
	if(totalValue == 0)
	{
		alert("Enter quantity");
			return false;	
	}
	/*
	//new logic
	
	
	//var x = document.forms["form"];
	
	var elementTagName = document.getElementsByTagName("input");
	var count = 0;
	console.log("elementTagName.length: "+elementTagName.length);
	
	for( var i =0; i <elementTagName.length; i++ )
	{
		console.log("inside for");
		if( elementTagName[i].type.toLowerCase() == 'number' )
		{
			console.log("inside if 1");
			console.log("elementTagName[i].value: "+elementTagName[i].value);
			
			if(elementTagName[i].value > 0 )
			{
				console.log("inside if 2");
				count ++;
				
			}
			console.log("count: "+count);
			
			if(elementTagName[i].value == '' && count == 0 )
			{
				console.log("inside if 3");
				//submit the form
				alert("Enter quantity");
				return false;
			}
			
		}
	}
	*/

}
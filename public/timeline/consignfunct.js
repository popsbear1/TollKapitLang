
	function consignfunct() {

		s=document.f2.date_to12.value
		days=(document.f2.consign.value*1)//-1

		if (days=='') {
			alert("there should be number input in the textbox")
		}
		dateArray = s.split('/')
		sdate = new Date(dateArray[2],dateArray[1]-1,dateArray[0])

		if(dateArray[2].length<4){
			alert("Please Enter The Year As A Four Digit Number\n\nExample:- 2002\n\nThank You")
			return document.f2.date_to.value=""
		//}
		}

		else{
			odate = new Date(sdate.getTime() - (days * 86400000));
			odate.setDate(odate.getDate() -25)
			document.f2.date_to.value=("0" + odate.getDate()).slice(-2) + '/' +  ("0" + (odate.getMonth() + 1)).slice(-2) + '/' + odate.getFullYear()


			odate1 = new Date(sdate.getTime() - (days * 86400000))
			odate1.setDate(odate1.getDate() -18)
			document.f2.date_to1.value=("0" + odate1.getDate()).slice(-2) + '/' +  ("0" + (odate1.getMonth() + 1)).slice(-2) + '/' + odate1.getFullYear()

			odate2 = new Date(sdate.getTime() - (days * 86400000))
			odate2.setDate(odate2.getDate() -17)
			document.f2.date_to2.value=("0" + odate2.getDate()).slice(-2) + '/' +  ("0" + (odate2.getMonth() + 1)).slice(-2) + '/' + odate2.getFullYear()

			odate3 = new Date(sdate.getTime() - (days * 86400000))
			odate3.setDate(odate3.getDate() - 17)
			document.f2.date_to3.value=("0" + odate3.getDate()).slice(-2) + '/' +  ("0" + (odate3.getMonth() + 1)).slice(-2) + '/' + odate3.getFullYear()

			odate4 = new Date(sdate.getTime() - (days * 86400000))
			odate4.setDate(odate4.getDate() - 5)
			document.f2.date_to4.value=("0" + odate4.getDate()).slice(-2) + '/' +  ("0" + (odate4.getMonth() + 1)).slice(-2) + '/' + odate4.getFullYear()


			odate5 = new Date(sdate.getTime() - (days * 86400000))
			odate5.setDate(odate5.getDate() - 5)
			document.f2.date_to5.value=("0" + odate5.getDate()).slice(-2) + '/' + ("0" + (odate5.getMonth() + 1)).slice(-2) + '/' +  odate5.getFullYear()

			odate6 = new Date(sdate.getTime() - (days * 86400000))
			odate6.setDate(odate6.getDate() - 4)
			document.f2.date_to6.value=("0" + odate6.getDate()).slice(-2) + '/' + ("0" + (odate6.getMonth() + 1)).slice(-2)  + '/' + odate6.getFullYear()

			odate7 = new Date(sdate.getTime() - (days * 86400000))
			odate7.setDate(odate7.getDate() - 4)
			document.f2.date_to7.value=("0" + odate7.getDate()).slice(-2) + '/' +  ("0" + (odate7.getMonth() + 1)).slice(-2) + '/' + odate7.getFullYear()

			odate8 = new Date(sdate.getTime() - (days * 86400000))
			odate8.setDate(odate8.getDate() - 3)
			document.f2.date_to8.value=("0" + odate8.getDate()).slice(-2) + '/' +("0" + (odate8.getMonth() + 1)).slice(-2) + '/' +  odate8.getFullYear()

			odate9 = new Date(sdate.getTime() - (days * 86400000))
			odate9.setDate(odate9.getDate() - 3)
			document.f2.date_to9.value=("0" + odate9.getDate()).slice(-2) + '/' +("0" + (odate9.getMonth() + 1)).slice(-2) + '/' +  odate9.getFullYear()

			odate10 = new Date(sdate.getTime() - (days * 86400000))
			odate10.setDate(odate10.getDate() - 2)
			document.f2.date_to10.value=("0" + odate10.getDate()).slice(-2) + '/' +("0" + (odate10.getMonth() + 1)).slice(-2) + '/' +  odate10.getFullYear()

			odate11 = new Date(sdate.getTime() - (days * 86400000))
			odate11.setDate(odate11.getDate() - 1)
			document.f2.date_to11.value=("0" + odate11.getDate()).slice(-2) + '/' +("0" + (odate11.getMonth() + 1)).slice(-2) + '/' +  odate11.getFullYear()

			odate12 = new Date(sdate.getTime() - (days * 86400000))
			odate12.setDate(odate12.getDate() - 0)
			document.f2.date_to12.value=("0" + odate12.getDate()).slice(-2) + '/' +("0" + (odate12.getMonth() + 1)).slice(-2) + '/' +  odate12.getFullYear()


		}
	}
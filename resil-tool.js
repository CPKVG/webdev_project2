
    //page navi functions
    function rtFunc1(){
        console.log(document.querySelector('alert1'));
    funcAlert();    
    funcScrollTop()
    }
    function rtBFunc1(){
    prevPage1();
    funcScrollTop()   
    }
    function rtFunc2(){
    nextPage2();
    funcScrollTop()
    }
    function rtBFunc2(){
    prevPage2();
    funcScrollTop()
    }
    function rtBFunc3(){
    prevPage3();
    funcScrollTop()
    }
    //end of page navi functions

    function rtFunc(){
    funcRDB();//main caculator func
    feedBack();  
    funcScrollTop()
    }

    function rtFuncB(){
    functReset(); 
    Clear()
    }

    var globalFinalScore;//this is sent to resil-tool-ajax
    
 



function funcRDB(){

    const questions = { 
    1: [
        {
        questionNo: 1,
        answerT1: "a",
        score: 0.30,
        },
        {
        questionNo: 1,
        answerT1: "b",
        score: 0.45,
        },
        {
        questionNo: 1,
        answerT1: "c",
        score: 0.60,
        },
        {
        questionNo: 1,
        answerT1: "d",
        score: 0.50,
        },
        {
        questionNo: 1,
        answerT1: "e",
        score: 0.45,
        },
        {
        questionNo: 1,
        answerT1: "f",
        score: 0.70,
        },
        {
        questionNo: 1,
        answerT1: "g",
        score: 0.50,
        },
        {
        questionNo: 1,
        answerT1: "h",
        score: 0.80,
        },
        {
        questionNo: 1,
        answerT1: "i",
        score: 0.40,
        },
        {
        questionNo: 1,
        answerT1: "j",
        score: 0.30,
        },
        {
        questionNo: 1,
        answerT1: "k",
        score: 0.60,
        },
        {
        questionNo: 1,
        answerT1: "l",
        score: 0.35,
        },
        {
        questionNo: 1,
        answerT1: "m",
        score: 0.35,
        },
        {
        questionNo: 1,
        answerT1: "n",
        score: 0.35,   
        },
        {
        questionNo: 1,
        answerT1: "o",
        score: 0.35,      
        },
        {
        questionNo: 1,
        answerT1: "p",
        score: 0.35,             
        },
        {
        questionNo: 1,
        answerT1: "q",
        score: 0.35,             
        },
        {
        questionNo: 1,
        answerT1: "r",
        score: 0.35,    
        },
        {
        questionNo: 1,
        answerT1: "s",
        score: 0.35,      
        }     

    ],
    2:
    [//small vs med business (multiplier small x1,med x1.5)
        {
        questionNo: 2,
        answerT1: "a",
        score: 1,
        },
        {
        questionNo: 2,
        answerT1: "b",
        score: 1.5,
        }
    ],
    3:
    [
        {//question 1 
        questionNo: 3,
        answerT2: "a",
        questionText: "Question 1: a",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr1/">Stakeholders</a>'
        },
        {
        questionNo: 3,
        answerT2: "b",
        questionText: "Question 1: b",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr1/">Stakeholders</a>'
        },
        {
        questionNo: 3,
        answerT2: "c",
        questionText: "Question 1: c",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr1/">Stakeholders</a>'
        },
        {
        questionNo: 3,
        answerT2: "d",
        questionText: "Question 1: d",
        score: 0.08,
        //link:'<a href="https://www.resilme.co.nz/index.php/qr1/">RQ1d</a>'
        },
        {
        questionNo: 3,
        answerT2: "e",
        questionText: "Question 1: e",
        score: 0.005,
        link:'<a href="https://www.resilme.co.nz/qr1/">Stakeholders</a>'
        }
    ],
    4:
    [
        {//question2
        questionNo: 4,
        answerT2: "a",
        questionText: "Question 2: a",
        score: 0.08,
        //link:'<a href="https://www.resilme.co.nz/index.php/qr2/">RQ2a</a>'
        },
        {
        questionNo: 4,
        answerT2: "b",
        questionText: "Question 2: b",
        score: 0.01,
        link:'<a href="https://www.resilme.co.nz/qr2/">Crucial Elements</a>'
        },
        {
        questionNo: 4,
        answerT2: "c",
        questionText: "Question 2: c",
        score: 0.02,
        link:'<a href="https://www.resilme.co.nz/qr2/">Crucial Elements</a>'
        },
        {
        questionNo: 4,
        answerT2: "d",
        questionText: "Question 2: d",
        score: 0.08,
        link:'<a href="https://www.resilme.co.nz/qr2/">Crucial Elements</a>'
        },
        {
        questionNo: 4,
        answerT2: "e",
        questionText: "Question 2: e",
        score: 0,
        link:'<a href="https://www.resilme.co.nz/qr2/">Crucial Elements</a>'
        }
    ],
    5:
    [
        {
        questionNo: 5,
        answerT2: "a",
        questionText: "Question 3: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo1</a>'
        },
        {
        questionNo: 5,
        answerT2: "b",
        questionText: "Question 3: b",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr3/">Decision making</a>'
        },
        {
        questionNo: 5,
        answerT2: "c",
        questionText: "Question 3: c",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr3/">Decision making</a>'
        },
        {
        questionNo: 5,
        answerT2: "d",
        questionText: "Question 3: d",
        score: 0.055,
        link:'<a href="https://www.resilme.co.nz/qr3/">Decision making</a>'
        }
    ],
    6:
    [
        {
        questionNo: 6,
        answerT2: "a",
        questionText: "Question 4: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 6,
        answerT2: "b",
        questionText: "Question 4: b",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr4/">Mitigation</a>'
        },
        {
        questionNo: 6,
        answerT2: "c",
        questionText: "Question 4: c",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr4/">Mitigation</a>'
        },
        {
        questionNo: 6,
        answerT2: "d",
        questionText: "Question 4: d",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr4/">Mitigation</a>'
        }
    ],
    7:
    [
        {
        questionNo: 7,
        answerT2: "a",
        questionText: "Question 5: a ",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr5/">Strengthening BCP</a>'
        },
        {
        questionNo: 7,
        answerT2: "b",
        questionText: "Question 5: b",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr5/">Strengthening BCP</a>'
        },
        {
        questionNo: 7,
        answerT2: "c",
        questionText: "Question 5: c",
        score: 0.04,
        link:'<a href="https://www.resilme.co.nz/qr5/">Strengthening BCP</a>'
        },
        {
        questionNo: 7,
        answerT2: "d",
        questionText: "Question 5: d",
        score: 0.07,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 7,
        answerT2: "e",
        questionText: "Question 5: e",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    8:
    [
        {
        questionNo: 8,
        answerT2: "a",
        questionText: "Question 6: a",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr6/">Importance of Community</a>'
        },
        {
        questionNo: 8,
        answerT2: "b",
        questionText: "Question 6: b",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 8,
        answerT2: "c",
        questionText: "Question 6: c",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr6/">Importance of Community</a>'
        },
        {
        questionNo: 8,
        answerT2: "d",
        questionText: "Question 6: d",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr6/">Importance of Community</a>'
        },
        {
        questionNo: 8,
        answerT2: "e",
        questionText: "Question 6: e",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr6/">Importance of Community</a>'
        }
    ],
    9:
    [
        {
        questionNo: 9,
        answerT2: "a",
        questionText: "Question 7: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 9,
        answerT2: "b",
        questionText: "Question 7: b",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr7/">Changing Course</a>'
        },
        {
        questionNo: 9,
        answerT2: "c",
        questionText: "Question 7: c",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr7/">Changing Course</a>'
        },
        {
        questionNo: 9,
        answerT2: "d",
        questionText: "Question 7: d",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr7/">Changing Course</a>'
        },
        {
        questionNo: 9,
        answerT2: "e",
        questionText: "Question 7: e",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr7/">Changing Course</a>'
        }
    ],
    10:
    [
        {
        questionNo: 10,
        answerT2: "a",
        questionText: "Question 8: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 10,
        answerT2: "b",
        questionText: "Question 8: b",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr8/">Preperation</a>'
        },
        {
        questionNo: 10,
        answerT2: "c",
        questionText: "Question 8: c",
        score: 0.065,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 10,
        answerT2: "d",
        questionText: "Question 8: d",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr8/">Preperation</a>'
        },
        {
        questionNo: 10,
        answerT2: "e",
        questionText: "Question 8: e",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr8/">Preperation</a>'
        }
    ],
    11:
    [
        {
        questionNo: 11,
        answerT2: "a",
        questionText: "Question 9: a",
        score: 0.01,
        link:'<a href="https://www.resilme.co.nz/qr9/">Insurance</a>'
        },
        {
        questionNo: 11,
        answerT2: "b",
        questionText: "Question 9: b",
        score: 0.08,
        //link:'<a href="https://www.resilme.co.nz/index.php/qr9/>foo</a>'
        },
        {
        questionNo: 11,
        answerT2: "c",
        questionText: "Question 9: c",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr9/">Insurance</a>'
        },
        {
        questionNo: 11,
        answerT2: "d",
        questionText: "Question 9: d",
        score: 0.04,
        link:'<a href="https://www.resilme.co.nz/qr9/">Insurance</a>'
        },
        {
        questionNo: 11,
        answerT2: "e",
        questionText: "Question 9: e",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr9/">Insurance</a>'
        }
    ],
    12:
    [
        {
        questionNo: 12,
        answerT2: "a",
        questionText: "Question 10: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 12,
        answerT2: "b",
        questionText: "Question 10: b",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr10/">Stakeholders and supply chain</a>'
        },
        {
        questionNo: 12,
        answerT2: "c",
        questionText: "Question 10: c",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr10/">Stakeholders and supply chain</a>'
        },
        {
        questionNo: 12,
        answerT2: "d",
        questionText: "Question 10: d",
        score: 0.065,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 12,
        answerT2: "e",
        questionText: "Question 10: e",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr10/">Stakeholders and supply chain</a>'
        }
    ],
    13:
    [
        {
        questionNo: 13,
        answerT2: "a",
        questionText: "Question 11: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 13,
        answerT2: "b",
        questionText: "Question 11: b",
        score: 0.065,
        link:'<a href="https://www.resilme.co.nz/qr11/">Business Functions</a>'
        },
        {
        questionNo: 13,
        answerT2: "c",
        questionText: "Question 11: c",
        score: 0.05,
        link:'<a href="https://www.resilme.co.nz/qr11/">Business Functions</a>'
        },
        {
        questionNo: 13,
        answerT2: "d",
        questionText: "Question 11: d",
        score: 0.015,
        link:'<a href="https://www.resilme.co.nz/qr11/">Business Functions</a>'
        },
        {
        questionNo: 13,
        answerT2: "e",
        questionText: "Question 11: e",
        score: 0.03,
        link:'<a href="https://www.resilme.co.nz/qr11/">Business Functions</a>'
        }
    ],
    14:
    [
        {
        questionNo: 14,
        answerT2: "a",
        questionText: "Question 12: a",
        score: 0.04,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 14,
        answerT2: "b",
        questionText: "Question 12: b",
        score: 0.02,
        link:'<a href="https://www.resilme.co.nz/qr12/">Scenario Planning</a>'
        },
        {
        questionNo: 14,
        answerT2: "c",
        questionText: "Question 12: c",
        score: 0.04,
        link:'<a href="https://www.resilme.co.nz/qr12/">Scenario Planning</a>'
        },
        {
        questionNo: 14,
        answerT2: "d",
        questionText: "Question 12: d",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 14,       
        answerT2: "e",
        questionText: "Question 12: e",
        score: 0.02,
        link:'<a href="https://www.resilme.co.nz/qr12/">Scenario Planning</a>'
        }
    ],
    15://from here different --> used to caculate v
    [
        {
        questionNo: 15,
        answerT2: "a",
        questionText: "Question 4: a",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 15,
        answerT2: "b",
        questionText: "Question 4: b",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 15,
        answerT2: "c",
        questionText: "Question 4: c",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 15,
        answerT2: "d",
        questionText: "Question 4: d",
        score: 0.015,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 15,
        answerT2: "e",
        questionText: "Question 4: e",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    16:
    [
        {
        questionNo: 16,
        answerT2: "a",
        questionText: "Question 4: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 16,
        answerT2: "b",
        questionText: "Question 4: b",
        score: 0.04,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 16,
        answerT2: "c",
        questionText: "Question 4: c",
        score: 0.12,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 16,
        answerT2: "d",
        questionText: "Question 4: d",
        score: 0.16,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 16,
        answerT2: "e",
        questionText: "Question 4: e",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    17:
    [
        {
        questionNo: 17,
        answerT3: "a",
        questionText: "Question 4:a",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 17,
        answerT3: "b",
        questionText: "Question 4: b",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 17,
        answerT3: "c",
        questionText: "Question 4: c",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 17,
        answerT3: "d",
        questionText: "Question 4: d",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 17,
        answerT3: "e",
        questionText: "Question 17: e",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    18:
    [
        {
        questionNo: 18,
        answerT3: "a",
        questionText: "Question 4: a",
        score: 0.08,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 18,
        answerT3: "b",
        questionText: "Question 4: b",
        score: 0.04,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 18,
        answerT3: "c",
        questionText: "Question 4: c",
        score: 0.12,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 18,
        answerT3: "d",
        questionText: "Question 4: d",
        score: 0.16,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 18,
        answerT3: "e",
        questionText: "Question 4: e",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    19:
    [
        {
        questionNo: 19,
        answerT3: "a",
        questionText: "Question 4: a",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 19,
        answerT3: "b",
        questionText: "Question 4: b",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 19,
        answerT3: "c",
        questionText: "Question 4: c",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 19,
        answerT3: "d",
        questionText: "Question 4: d",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 19,
        answerT3: "e",
        questionText: "Question 4: e",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    20:
    [
        {
        questionNo: 20,
        answerT3: "a",
        questionText: "Question 4: a",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 20,
        answerT3: "b",
        questionText: "Question 4: b",
        score: 0.05,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 20,
        answerT3: "c",
        questionText: "Question 4: c",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 20,
        answerT3: "d",
        questionText: "Question 4: d",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    21:
    [
        {
        questionNo: 21,
        answerT3: "a",
        questionText: "Question 4: a",
        score: 0.2,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 21,
        answerT3: "b",
        questionText: "Question 4: b",
        score: 0.1,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 21,
        answerT3: "c",
        questionText: "Question 4: c",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 21,
        answerT3: "d",
        questionText: "Question 4: d",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        },
        {
        questionNo: 21,
        answerT3: "e",
        questionText: "Question 4: e",
        score: 0.15,
        //link:'<a href="https://www.google.com">foo</a>'
        }
    ],
    };


    const answerT2 = []; 
    const answerT1 = [];
    const answerT3 = [];


    //asks for industy type + business size to caculate prob(2 questions(both drop downs)

    answerT1.push(questions[1].filter(x => x.answerT1 === document.querySelector('option[name=idb]:checked').value));
    answerT1.push(questions[2].filter(x => x.answerT1 === document.querySelector('option[name=idb1]:checked').value));


    //push questions asking for marginal rate of manu into specific array(12questions)
    answerT2.push(questions[3].filter(x => x.answerT2 === document.querySelector('input[name=rdb]:checked').value));
    answerT2.push(questions[4].filter(x => x.answerT2 === document.querySelector('input[name=rdb1]:checked').value));
    answerT2.push(questions[5].filter(x => x.answerT2 === document.querySelector('input[name=rdb2]:checked').value));
    answerT2.push(questions[6].filter(x => x.answerT2 === document.querySelector('input[name=rdb3]:checked').value));
    answerT2.push(questions[7].filter(x => x.answerT2 === document.querySelector('input[name=rdb4]:checked').value));
    answerT2.push(questions[8].filter(x => x.answerT2 === document.querySelector('input[name=rdb5]:checked').value));
    answerT2.push(questions[9].filter(x => x.answerT2 === document.querySelector('input[name=rdb6]:checked').value));
    answerT2.push(questions[10].filter(x => x.answerT2 === document.querySelector('input[name=rdb7]:checked').value));
    answerT2.push(questions[11].filter(x => x.answerT2 === document.querySelector('input[name=rdb8]:checked').value));
    answerT2.push(questions[12].filter(x => x.answerT2 === document.querySelector('input[name=rdb9]:checked').value));
    answerT2.push(questions[13].filter(x => x.answerT2 === document.querySelector('input[name=rdb10]:checked').value));
    answerT2.push(questions[14].filter(x => x.answerT2 === document.querySelector('input[name=rdb11]:checked').value));


    //push questions asking for v into v-answer specific array (5 questions)
    answerT3.push(questions[17].filter(x => x.answerT3 === document.querySelector('input[name=v1]:checked').value));
    answerT3.push(questions[18].filter(x => x.answerT3 === document.querySelector('input[name=v2]:checked').value));
    answerT3.push(questions[19].filter(x => x.answerT3 === document.querySelector('input[name=v3]:checked').value));
    answerT3.push(questions[20].filter(x => x.answerT3 === document.querySelector('input[name=v4]:checked').value));
    answerT3.push(questions[21].filter(x => x.answerT3=== document.querySelector('input[name=v5]:checked').value));

    console.log(answerT2)
    answerT2.sort((a, b) => b[0].score - a[0].score).slice(0, 3);// sorts the top 3
    var sumMarginalRateMauv = answerT2.sort((a, b) => b[0].score - a[0].score).map(x => x[0].score).reduce((a, b) => a + b); //sum of MRM
    var sumValuability = answerT3.sort((a, b) => b[0].score - a[0].score).map(x => x[0].score).reduce((a, b) => a + b); //sum of V
    var probIndust = answerT1.sort((a, b) => b[0].score - a[0].score).map(x => x[0].score).reduce((a, b) => a * b);


    document.getElementById("feedback1").innerHTML =  answerT2.sort((a, b) => b[0].score - a[0].score).map(x => x[0].link).filter(x => x !== undefined).slice(0,1);
    document.getElementById("feedback2").innerHTML =  answerT2.sort((a, b) => b[0].score - a[0].score).map(x => x[0].link).filter(x => x !== undefined).slice(1,2);
    document.getElementById("feedback3").innerHTML =  answerT2.sort((a, b) => b[0].score - a[0].score).map(x => x[0].link).filter(x => x !== undefined).slice(2,3);


    //console.log(top3);
    //console.log(linkArray1);
    //console.log(linkArray2);
    //console.log(linkArray3);


    console.log(answerT2.sort((a, b) => b[0].score - a[0].score).map(x => x[0].score))

    console.log(answerT2); 
    console.log(answerT1); 
    console.log(sumMarginalRateMauv.toFixed(2));
    console.log(sumValuability.toFixed(2));
    console.log(probIndust.toFixed(2));
    console.log(answerT1.sort((a, b) => b[0].score - a[0].score).map(x => x[0].score))



    //document.getElementById("feedbacklink1").innerHTML = firstlink;




    //hidding based on array length (method 2)
    document.getElementById('feedback0').style.display='none';  //well done message if there is nothing to recommend
    

    const fb = [];
    fb.push(document.getElementById("feedback1").innerHTML);
    fb.push(document.getElementById("feedback2").innerHTML);
    fb.push(document.getElementById("feedback3").innerHTML);


    switch (fb.length){
    case fb.length = 1:
        document.getElementById('2ndLink').style.display='none'; 
        document.getElementById('3rdLink').style.display='none';  
    break;
    case fb.length = 2:
        document.getElementById('3rdLink').style.display='none'; 
    break;
    case fb.length = 0:
        document.getElementById('1stLink').style.display='none';  
        document.getElementById('2ndLink').style.display='none'; 
        document.getElementById('3rdLink').style.display='none';  
        document.getElementById('feedback0').style.display='block'; 
        document.getElementById('linkStatement').style.display='none'; 
    break;

    };


    


    //end of link statements


    var prePrefinalscore = probIndust*sumValuability
    var risk = prePrefinalscore*(1-sumMarginalRateMauv);
    var limitRisk = risk.toFixed(2);

    finalscore = Math.min(1, Math.max(0, limitRisk));


    finalscorePresent = (1 - finalscore);


    globalFinalScore = finalscorePresent*100;


    //document.getElementsByClassName("rtScore")[0][1].innerHTML = finalscorePresent*100;//issue with this


   var p = document.getElementsByClassName("rtScore");
        for(var i = 0; i < p.length; i++)
        p[i].innerHTML = finalscorePresent*100;



    switch (true){
    case (finalscorePresent < 0.20):
    feedbacktext = "Non-existant"; 
    break;
    case (finalscorePresent < 0.40):
    feedbacktext = "Poor";
    break;
    case (finalscorePresent < 0.60 ):
    feedbacktext = "Average";
    break;
    case (finalscorePresent < 0.80):
    feedbacktext = "Good";
    break;  
    case (finalscorePresent <= 1.00 ):
    feedbacktext = "Excellent";
    break;
    default:
    feedbacktext = "null";
    break;
    };
    //console.log(finalscorePresent*100); 

    
    document.getElementById("fbText").innerHTML =  feedbacktext;


    return;





    };

    //setInterval(function (){console.log(globalFinalScore)},5000);

    function funcScrollTop() {
        window.scrollTo(100,0);}




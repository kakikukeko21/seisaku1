function readFirst(){
    //プルダウンリストをループ処理で値を取り出してセレクトボックスにセットする
    for(var i=0;i<list.length;i++){
      let opt = document.createElement("option");
      opt.value = list[i].val;  //value値
      opt.text = list[i].txt;   //テキスト値
      document.getElementById("PullDownList").appendChild(opt);
    }
  };
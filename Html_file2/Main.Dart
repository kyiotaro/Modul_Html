import 'package:flutter/material.dart';


void main() {
  runApp(const MyApp());
}


class MyApp extends StatelessWidget {
  const MyApp({super.key});
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: "tugas",
      home: Scaffold(
        appBar: AppBar(
          title: Text("Appbar APlikasi"),
          backgroundColor: Colors.blue,
        ),
        body: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          mainAxisAlignment: MainAxisAlignment.spaceEvenly,
          children: [
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceBetween,
              children: [
                Expanded(
                  flex: 2,
                  child: Container(color: Colors.grey, child: Text("contoh expanded"))),
                Expanded(
                  flex: 1,
                  child: Container(color: Colors.green, child: Text("perbandingan 2:1"))),
                ],
            ),
            Row(
              mainAxisAlignment: MainAxisAlignment.spaceAround,
              children: [
                Container(width: 100, height: 100, color: Colors.red),
                Container(width: 100, height: 100, color: Colors.green),
                Container(
                  child: Text(
                    "ini adalah contoh row",
                    textAlign: TextAlign.center,
                  ),
                  alignment: Alignment.center,
                  width: 100,
                  height: 100,
                  color: Colors.teal,
                ),
              ],
            ), Text("kalo ini column"),
            Container(width: 100, height: 100, color: Colors.red),
            Container(width: 100, height: 100, color: Colors.green),
            Container(width: 100, height: 100, color: Colors.blue),
          ],
        ),
      ),
    );
  }
}




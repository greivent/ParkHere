import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:google_maps_flutter/google_maps_flutter.dart';

class Search extends StatelessWidget{
  @Override
  Widget build(BuildContext context){
    return Scaffold(
      body: Column(children: <Widget>[
        Container(
          height: MediaQuery.of(context).size.height/3,
          width: MediaQuery.of(context).size.width,
          child: const GoogleMap(
            initialCameraPosition: CameraPosition(target: LatLng(6.2239,106.6490)),
            zoomGesturesEnabled: true,
            ),
          
        )
      ],),
    );
  }
}
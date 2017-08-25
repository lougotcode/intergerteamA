package com.example.aderelemaryidowu.integerhackathon;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListAdapter;
import android.widget.ListView;

import java.util.ArrayList;

/**
 * Created by ADERELE MARY IDOWU on 8/23/2017.
 */

public class DrugList extends AppCompatActivity {
    ListView listView;
    String[] manufacturer_name, drug_name, curable_disease, advesre_effect;

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.drug_list);
        drug_name = getResources().getStringArray(R.array.drug_names);
        manufacturer_name = getResources().getStringArray(R.array.manufacturer_names);
        curable_disease = getResources().getStringArray(R.array.curable_sickness);
        advesre_effect = getResources().getStringArray(R.array.adverse_effect);
        ArrayList<String> drugList = new ArrayList<String>();
        listView = (ListView) findViewById(R.id.list_item);
        for (int i = 0; i < drug_name.length; i++) {
            drugList.add(drug_name[i]);
        }
        ArrayAdapter adapter = new ArrayAdapter(this, android.R.layout.simple_list_item_1, drugList);
        listView.setAdapter(adapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                for (int i = 0; i < drug_name.length; i++) {
                    if ((listView.getItemAtPosition(position)).equals(drug_name[i])) {
                        Intent intent = new Intent(view.getContext(), DrugListDetails.class);
                        intent.putExtra("DrugName", drug_name[i]);
                        intent.putExtra("ManufacturerName", manufacturer_name[i]);
                        intent.putExtra("CurableDisease", curable_disease[i]);
                        intent.putExtra("AdverseEffect", advesre_effect[i]);
                        startActivity(intent);
                    }
                }
            }
        });
    }
}


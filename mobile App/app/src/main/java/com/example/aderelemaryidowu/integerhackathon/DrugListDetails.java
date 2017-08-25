package com.example.aderelemaryidowu.integerhackathon;

import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.widget.ImageView;
import android.widget.TextView;

/**
 * Created by ADERELE MARY IDOWU on 8/24/2017.
 */

public class DrugListDetails extends AppCompatActivity {
    TextView drugNameTextView;
    TextView manufacturerNameTextView;
    TextView curableDiseaseTextView;
    TextView adverseEffectTextView;
    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.details);
        drugNameTextView = (TextView)findViewById(R.id.drug_name_details);
        manufacturerNameTextView = (TextView)findViewById(R.id.manufacturer_name_details);
        curableDiseaseTextView = (TextView)findViewById(R.id.curable_disease_details);
        adverseEffectTextView = (TextView)findViewById(R.id.adverse_effect_details);
        drugNameTextView.setText("Drug Name: " + getIntent().getStringExtra("DrugName"));
        manufacturerNameTextView.setText("Manufacturer's Name: " + getIntent().getStringExtra("ManufacturerName"));
        curableDiseaseTextView.setText("Curable Disease: " + getIntent().getStringExtra("CurableDisease"));
        adverseEffectTextView.setText("Adverse Effect: " + getIntent().getStringExtra("AdverseEffect"));
    }
}